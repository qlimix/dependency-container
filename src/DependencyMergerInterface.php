<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Qlimix\DependencyContainer\Exception\DependencyMergerException;

interface DependencyMergerInterface
{
    /**
     * @param string $id
     * @param callable $service
     *
     * @throws DependencyMergerException
     */
    public function merge(string $id, callable $service): void;
}
