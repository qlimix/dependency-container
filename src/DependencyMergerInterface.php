<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Psr\Container\ContainerInterface;
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

    /**
     * @param string $id
     * @param mixed $value
     *
     * @throws DependencyException
     */
    public function mergeValue(string $id, $value): void;

    /**
     * @return ContainerInterface
     *
     * @throws DependencyException
     */
    public function getContainer(): ContainerInterface;
}
