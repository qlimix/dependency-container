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

    /**
     * @param Container $pimple
     */
    public function __construct(Container $pimple)
    {
        $this->pimple = $pimple;
    }

    /**
     * @inheritDoc
     */
    public function merge(string $id, callable $service): void
    {
        if (!\method_exists($service, '__invoke')) {
            throw new DependencyException('callable should be invokable');
        }

        $container = $this->pimple[ContainerInterface::class];

        $this->pimple[$id] = function () use ($container, $service) {
            return $service($container);
        };
    }
}
