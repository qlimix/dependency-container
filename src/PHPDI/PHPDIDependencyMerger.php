<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\PHPDI;

use DI\Container;
use Psr\Container\ContainerInterface;
use Qlimix\DependencyContainer\DependencyMergerInterface;
use Qlimix\DependencyContainer\Exception\DependencyException;

final class PHPDIDependencyMerger implements DependencyMergerInterface
{
    /** @var Container */
    private $phpdi;

    /**
     * @param Container $phpdi
     */
    public function __construct(Container $phpdi)
    {
        $this->phpdi = $phpdi;
    }

    /**
     * @inheritDoc
     */
    public function merge(string $id, callable $service): void
    {
        if (!\method_exists($service, '__invoke')) {
            throw new DependencyException('callable should be invokable');
        }

        $this->phpdi->set($id, $service);
    }

    /**
     * @inheritDoc
     */
    public function mergeValue(string $id, $value): void
    {
        $this->phpdi->set($id, $value);
    }

    /**
     * @inheritdoc
     */
    public function getContainer(): ContainerInterface
    {
        return $this->phpdi;
    }
}
