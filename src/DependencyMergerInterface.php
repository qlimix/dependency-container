<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Qlimix\DependencyContainer\Exception\DependencyException;

interface DependencyMergerInterface
{
    /**
     * @param string $id
     * @param callable $service
     *
     * @throws DependencyException
     */
    public function merge(string $id, callable $service): void;
}
