<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\Registry;

use Qlimix\DependencyContainer\ProviderInterface;

interface ProviderCollectionInterface
{
    /**
     * @return ProviderInterface[]
     */
    public function getProviders(): array;
}
