<?php

declare(strict_types=1);

namespace Tavaan\Engine\Filesystem\Stores;

use Tavaan\Engine\Filesystem\Contracts\FilesystemManagerStoreInterface;

/**
 * درایور memory برای FilesystemManager.
 */
final class MemoryStore implements FilesystemManagerStoreInterface
{
    /** @var array<string, mixed> */
    private array $data = [];

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->data[$key] ?? $default;
    }

    public function set(string $key, mixed $value, ?int $ttl = null): bool
    {
        $this->data[$key] = $value;
        return true;
    }

    public function has(string $key): bool
    {
        return isset($this->data[$key]);
    }

    public function forget(string $key): bool
    {
        unset($this->data[$key]);
        return true;
    }

    public function flush(): bool
    {
        $this->data = [];
        return true;
    }
}
