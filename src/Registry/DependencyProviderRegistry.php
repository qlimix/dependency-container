<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\Registry;

use Qlimix\DependencyContainer\DependencyRegistryInterface;
use Qlimix\DependencyContainer\DependencyProviderInterface;
use Qlimix\DependencyContainer\DependencyProviderRegistryInterface;
use Qlimix\DependencyContainer\Exception\DependencyRegistryException;

final class DependencyProviderRegistry implements DependencyProviderRegistryInterface
{
    /** @var DependencyRegistryInterface */
    private $merger;

    /**
     * @param DependencyRegistryInterface $merger
     */
    public function __construct(DependencyRegistryInterface $merger)
    {
        $this->merger = $merger;
    }

    /**
     * @inheritDoc
     */
    public function register(DependencyProviderInterface $provider): void
    {
        try {
            $provider->provide($this->merger);
        } catch (\Throwable $exception) {
            throw new DependencyRegistryException('Failed to merge provider into container', 0, $exception);
        }
    }
}
