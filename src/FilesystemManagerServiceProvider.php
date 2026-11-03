<?php

declare(strict_types=1);

namespace Tavaan\Engine\Filesystem;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Filesystem\Contracts\FilesystemManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * FilesystemManagerServiceProvider — ثبت سرویس‌های موتور FilesystemManager.
 */
final class FilesystemManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(FilesystemManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new FilesystemManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('filesystem', $this->app->get(FilesystemManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Filesystem\Console\Storage_linkCommand::class;

        // ثبت درایورها (در صورت نیاز)
        // درایورها به‌صورت lazy در زمان استفاده ساخته می‌شوند.

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            FilesystemManagerInterface::class,
            'filesystem',
        ];
    }
}