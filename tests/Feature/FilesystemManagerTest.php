<?php

declare(strict_types=1);

namespace Tavaan\Engine\Filesystem\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Filesystem\FilesystemManager;
use Tavaan\Engine\Filesystem\FilesystemManagerServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور FilesystemManager.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class FilesystemManagerTest extends TestCase
{
    private FilesystemManager $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new FilesystemManager($config);
    }

    /**
     * T-01: put/get/exists/delete در هر ۴ درایور
     */
    public function test_t01_putgetexistsdelete____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: Path traversal `../../etc/passwd` → رد
     */
    public function test_t02_path_traversal_etcpasswd__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: Symlink escape → رد
     */
    public function test_t03_symlink_escape__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Atomic write (بدون partial)
     */
    public function test_t04_atomic_write__partial(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: S3 signing با AWS test vectors
     */
    public function test_t05_s3_signing__aws_test_vectors(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: readStream حافظه ثابت
     */
    public function test_t06_read_stream__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: temporaryUrl امضاشده
     */
    public function test_t07_temporary_url_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: directories/files recursive
     */
    public function test_t08_directoriesfiles_recursive(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

}