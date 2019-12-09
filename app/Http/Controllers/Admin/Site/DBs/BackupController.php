<?php

namespace App\Http\Controllers\Admin\Site\DBs;

use Prologue\Alerts\Facades\Alert;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{

    public function create()
    {
        try {
            Artisan::call('backup:run --only-db');
            Artisan::output();
            return redirect()->back()->with('success', 'Database backup successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', "Failed create new backup ${e}.");
        }
    }

    /**
     * Downloads a backup zip file.
     *
     */
    public function download($file_name)
    {
        $file = config('backup.backup.name') . '/' . $file_name;
        $disk = Storage::disk(config('backup.backup.destination.disks')[0]);
        if ($disk->exists($file)) {
            $fs = Storage::disk(config('backup.backup.destination.disks')[0])->getDriver();
            $stream = $fs->readStream($file);

            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                "Content-Type" => $fs->getMimetype($file),
                "Content-Length" => $fs->getSize($file),
                "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
            ]);
        } else {
            return redirect()->back()->with('error', "The backup file doesn't exist.");
        }
    }

    /**
     * Deletes a backup file.
     */
    public function delete($file_name)
    {
        $disk = Storage::disk(config('backup.backup.destination.disks')[0]);
        if ($disk->exists(config('backup.backup.name') . '/' . $file_name)) {
            $disk->delete(config('backup.backup.name') . '/' . $file_name);
            return redirect()->back()->with('success', 'Database delete successfully');
        } else {
            return redirect()->back()->with('error', "The backup file doesn't exist.");
        }
    }
}