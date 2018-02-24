<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

interface DependencyProviderInterface
{
    /**
     * @param DependencyMergerInterface $merger
     */
    public function provide(DependencyMergerInterface $merger): void;
}
