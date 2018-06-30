<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Qlimix\DependencyContainer\Exception\DependencyRegistryException;

interface DependencyRegistryInterface
{
    /**
     * @param DependencyProviderInterface $provider
     *
     * @throws DependencyRegistryException
     */
    public function register(DependencyProviderInterface $provider): void;
}
