<?php declare(strict_types=1);

namespace Qlimix\Tests\DependencyContainer\Registry;

use PHPUnit\Framework\TestCase;
use Qlimix\DependencyContainer\ProviderInterface;
use Qlimix\DependencyContainer\Registry\ProviderRegistry;

final class ProviderRegistryTest extends TestCase
{
    private ProviderRegistry $registry;

    protected function setUp(): void
    {
        $this->registry = new ProviderRegistry();
    }

    public function testShouldRegisterProviders(): void
    {
        $providers = [
            $this->createMock(ProviderInterface::class),
            $this->createMock(ProviderInterface::class),
            $this->createMock(ProviderInterface::class),
        ];

        foreach ($providers as $provider) {
            $this->registry->register($provider);
        }

        $this->assertCount(count($providers), $this->registry->getProviders());
    }
}
