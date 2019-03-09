<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\Registry;

interface ProviderAssemblerInterface
{
    public function assemble(ProviderRegistryInterface $registry): void;
}
