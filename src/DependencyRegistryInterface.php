<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Psr\Container\ContainerInterface;

interface DependencyRegistryInterface extends ContainerInterface
{
    public function set(string $id, callable $service): void;

    /**
     * @param mixed $value
     */
    public function setValue(string $id, $value): void;

    public function setMaker(string $id, callable $maker);

    /**
     * @return mixed
     */
    public function make(string $id);

    public function merge(string $id, array $value): void;
}
