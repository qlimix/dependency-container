<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Qlimix\DependencyContainer\Exception\DependencyException;

interface DependencyProviderInterface
{
    /**
     * @param DependencyMergerInterface $merger
     *
     * @throws DependencyException
     */
    public function provide(DependencyMergerInterface $merger): void;
}
