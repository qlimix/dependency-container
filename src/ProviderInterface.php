<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer;

use Qlimix\DependencyContainer\Exception\ProviderException;

interface ProviderInterface
{
    /**
     * @throws ProviderException
     */
    public function provide(RegistryInterface $registry): void;
}
