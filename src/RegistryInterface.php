<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Psr\Container\ContainerInterface;

interface RegistryInterface extends ContainerInterface
{
    public function set(string $id, callable $service): void;

    /**
     * @param mixed $value
     */
    public function setValue(string $id, $value): void;

    public function setMaker(string $id, callable $maker): void;

    /**
     * @return mixed
     */
    public function make(string $id, ?string $setId = null);

    public function merge(string $id, array $value): void;
}
