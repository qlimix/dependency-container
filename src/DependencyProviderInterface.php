<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Qlimix\DependencyContainer\Exception\DependencyProviderException;

interface DependencyProviderInterface
{
    /**
     * @param DependencyRegistryInterface $registry
     *
     * @throws DependencyProviderException
     */
    public function provide(DependencyRegistryInterface $registry): void;
}
