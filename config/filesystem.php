<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Filesystem Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور filesystem — همهٔ کلیدهای مستندشده در `docs/03-engines/filesystem.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/filesystem.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('FILESYSTEM_DEFAULT', 'local'),

    /*| لیست درایورها */
    'drivers' => [
        'local' => [
            // پیکربندی درایور local
            'enabled' => true,
        ],
        's3' => [
            // پیکربندی درایور s3
            'enabled' => true,
        ],
        'ftp' => [
            // پیکربندی درایور ftp
            'enabled' => true,
        ],
        'memory' => [
            // پیکربندی درایور memory
            'enabled' => true,
        ],
    ],

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('FILESYSTEM_PREFIX', 'filesystem:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('FILESYSTEM_LOG_CHANNEL', 'filesystem'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Storage',
        'accessor' => 'filesystem',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];