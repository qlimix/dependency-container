<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Qlimix\DependencyContainer\Exception\DependencyProviderException;

interface DependencyProviderInterface
{
    /**
     * @param DependencyMergerInterface $merger
     *
     * @throws DependencyProviderException
     */
    public function provide(DependencyMergerInterface $merger): void;
}
