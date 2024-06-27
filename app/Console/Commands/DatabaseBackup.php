<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DatabaseBackup extends Command
{
protected $signature = 'db:backup';
protected $description = 'Backup the database';

public function handle()
{
// Ensure backup directory exists
if (!Storage::exists('backups')) {
Storage::makeDirectory('backups');
}

// Backup filename
$backupFileName = 'backup-' . Carbon::now()->format('Y-m-d_His') . '.sql';

// MySQL dump command
$command = sprintf(
'mysqldump --user=%s --password=%s --host=%s %s > %s',
env('DB_USERNAME'),
env('DB_PASSWORD'),
env('DB_HOST'),
env('DB_DATABASE'),
storage_path('app/backups/') . $backupFileName
);

// Execute the command
exec($command);

// Output success message
$this->info('Database backup completed successfully: ' . $backupFileName);
}
}