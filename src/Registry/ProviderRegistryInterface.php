<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\Registry;

use Qlimix\DependencyContainer\ProviderInterface;

interface ProviderRegistryInterface
{
    /**
     * @param ProviderInterface $provider
     */
    public function register(ProviderInterface $provider): void;
}
