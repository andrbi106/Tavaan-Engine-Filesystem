<?php

declare(strict_types=1);

namespace Tavaan\Engine\Filesystem\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * storage:link command.
 */
final class Storage_linkCommand implements CommandInterface
{
    public function name(): string
    {
        return 'storage:link';
    }

    public function description(): string
    {
        return 'Run storage:link (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
