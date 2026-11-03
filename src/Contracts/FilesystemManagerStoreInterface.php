<?php

declare(strict_types=1);

namespace Tavaan\Engine\Filesystem\Contracts;

/**
 * قرارداد درایور FilesystemManager.
 */
interface FilesystemManagerStoreInterface
{
    /**
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed;

    public function set(string $key, mixed $value, ?int $ttl = null): bool;

    public function has(string $key): bool;

    public function forget(string $key): bool;

    public function flush(): bool;
}
