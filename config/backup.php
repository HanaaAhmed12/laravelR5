<?php

return [

    /*
    |--------------------------------------------------------------------------
    | MySQL Dump Command Path
    |--------------------------------------------------------------------------
    |
    | This value should be the path to the location where the 'mysqldump'
    | command is located on your server. This is used to perform database
    | backups via the command line. Make sure this path is correct.
    |
    */

    'mysql' => [
        'dump_command_path' => 'C:\xampp\mysql\bin',
        'use_single_transaction' => true,
        'timeout' => 60 * 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Backup Destination Disks
    |--------------------------------------------------------------------------
    |
    | Here you can specify the disk names on which you wish to store your backups.
    | The `backup:run` artisan command will store a backup file on each of these
    | disks. Disks can be specified as a disk names or an array of disk names.
    |
    */

    'destination' => [
        'disks' => ['local'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Cleanup Strategy
    |--------------------------------------------------------------------------
    |
    | The strategy to use for cleaning up old backups. Keep at least 5 backups
    | and remove backups older than 7 days. Available strategies: `keep-all`,
    | `keep-newest`, `keep-latest`, `keep-oldest`, `delete-before`, `delete-after`.
    |
    */

    'cleanup' => [
        'strategy' => 'delete-after',
        'keep_all_backups_for_days' => 7,
        'keep_daily_backups_for_days' => 16,
        'keep_weekly_backups_for_weeks' => 8,
        'keep_monthly_backups_for_months' => 4,
        'keep_yearly_backups_for_years' => 2,
        'delete_before_dump' => false,
        'delete_after_upload' => false,
    ],

];
