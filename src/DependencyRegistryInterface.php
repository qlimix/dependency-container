<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Psr\Container\ContainerInterface;

interface DependencyRegistryInterface extends ContainerInterface
{
    /**
     * @param string $id
     * @param callable $service
     */
    public function set(string $id, callable $service): void;

    /**
     * @param string $id
     * @param mixed $value
     */
    public function setValue(string $id, $value): void;
}
