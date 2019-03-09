<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\Registry;

use Qlimix\DependencyContainer\ProviderInterface;

final class ProviderRegistry implements ProviderRegistryInterface, ProviderCollectionInterface
{
    /** @var ProviderInterface[] */
    private $providers;

    /**
     * @inheritDoc
     */
    public function register(ProviderInterface $provider): void
    {
        $this->providers[] = $provider;
    }

    /**
     * @inheritDoc
     */
    public function getProviders(): array
    {
        return $this->providers;
    }
}
