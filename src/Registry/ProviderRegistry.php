<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\Registry;

use Qlimix\DependencyContainer\ProviderInterface;

final class ProviderRegistry implements ProviderRegistryInterface, ProviderCollectionInterface
{
    /** @var ProviderInterface[] */
    private array $providers;

    public function register(ProviderInterface $provider): void
    {
        $this->providers[] = $provider;
    }

    /**
     * @inheritdoc
     */
    public function getProviders(): array
    {
        return $this->providers;
    }
}
