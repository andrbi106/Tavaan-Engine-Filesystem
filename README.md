# Tavaan Engine — Filesystem

> **سامانه فایل** — موتور Filesystem در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.filesystem` |
| نام | `Filesystem` |
| عنوان فارسی | سامانه فایل |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Filesystem` |
| نوع | `engine` |
| Facade | `Storage` (accessor: `filesystem`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Filesystem\Contracts\FilesystemInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Filesystem\Exceptions\DiskFullException`
- `Tavaan\Engine\Filesystem\Exceptions\FileNotFoundException`
- `Tavaan\Engine\Filesystem\Exceptions\FilesystemException`
- `Tavaan\Engine\Filesystem\Exceptions\PathTraversalException`

## Facadeها

- `Tavaan\Engine\Filesystem\Facades\Storage`

## کلاس‌های اصلی

- `src/Adapters/AbstractFilesystem.php`
- `src/Adapters/FtpFilesystem.php`
- `src/Adapters/S3/CurlS3Transport.php`
- `src/Adapters/S3/S3TransportInterface.php`
- `src/Adapters/S3/StreamS3Transport.php`
- `src/Adapters/S3Filesystem.php`
- `src/Adapters/S3Signer.php`
- `src/Console/StorageLinkCommand.php`
- `src/Drivers/LocalFilesystem.php`
- `src/Drivers/MemoryFilesystem.php`
- `src/FilesystemManager.php`
- `src/FilesystemServiceProvider.php`

## Service Providerها

- `Tavaan\Engine\Filesystem\FilesystemServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

## پیکربندی

- فایل پیکربندی: `config/filesystem.php`
- کلید: `filesystem`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Filesystem.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Filesystem`** (این مخزن) | موتور Filesystem |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
