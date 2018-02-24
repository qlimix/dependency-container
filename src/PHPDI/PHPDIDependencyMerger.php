<?php declare(strict_types=1);

namespace Qlimix\DependencyContainer\PHPDI;

use DI\Container;
use Qlimix\DependencyContainer\DependencyMergerInterface;
use Qlimix\DependencyContainer\Exception\DependencyMergerException;

final class PHPDIDependencyMerger implements DependencyMergerInterface
{
    /** @var Container */
    private $phpdi;

    /**
     * @param Container $phpdi
     */
    public function __construct(Container $phpdi)
    {
        $this->phpdi = $phpdi;
    }

    /**
     * @inheritDoc
     */
    public function merge(string $id, callable $service): void
    {
        if (!\method_exists($service, '__invoke')) {
            throw new DependencyMergerException('callable should be invokable');
        }

        $this->phpdi->set($id, $service);
    }
}
