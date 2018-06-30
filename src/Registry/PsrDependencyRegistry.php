<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\Registry;

use Qlimix\DependencyContainer\DependencyMergerInterface;
use Qlimix\DependencyContainer\DependencyProviderInterface;
use Qlimix\DependencyContainer\DependencyRegistryInterface;
use Qlimix\DependencyContainer\Exception\DependencyRegistryException;

final class PsrDependencyRegistry implements DependencyRegistryInterface
{
    /** @var DependencyMergerInterface */
    private $merger;

    /**
     * @param DependencyMergerInterface $merger
     */
    public function __construct(DependencyMergerInterface $merger)
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
