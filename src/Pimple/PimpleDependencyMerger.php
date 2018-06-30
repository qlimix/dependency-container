<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\Pimple;

use Pimple\Container;
use Psr\Container\ContainerInterface;
use Qlimix\DependencyContainer\DependencyMergerInterface;
use Qlimix\DependencyContainer\Exception\DependencyException;

final class PimpleDependencyMerger implements DependencyMergerInterface
{
    /** @var Container */
    private $pimple;

    /** @var ContainerInterface */
    private $psrContainer;

    /**
     * @param Container $pimple
     * @param ContainerInterface $container
     */
    public function __construct(Container $pimple, ContainerInterface $container)
    {
        $this->pimple = $pimple;
        $this->psrContainer = $container;
    }

    /**
     * @inheritDoc
     */
    public function merge(string $id, callable $service): void
    {
        if (!\method_exists($service, '__invoke')) {
            throw new DependencyException('callable should be invokable');
        }

        $container = $this->psrContainer;

        $this->pimple[$id] = function () use ($container, $service) {
            return $service($container);
        };
    }

    /**
     * @inheritDoc
     */
    public function mergeValue(string $id, $value): void
    {
        $this->pimple[$id] = $value;
    }

    /**
     * @inheritdoc
     */
    public function getContainer(): ContainerInterface
    {
        return $this->pimple[ContainerInterface::class];
    }
}
