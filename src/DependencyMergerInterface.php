<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Psr\Container\ContainerInterface;

interface DependencyMergerInterface
{
    /**
     * @param string $id
     * @param callable $service
     */
    public function merge(string $id, callable $service): void;

    /**
     * @param string $id
     * @param mixed $value
     */
    public function mergeValue(string $id, $value): void;

    /**
     * @return ContainerInterface
     */
    public function getContainer(): ContainerInterface;
}
