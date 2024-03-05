<?php

namespace App\Http\Controllers;
use Spatie\Backup\Helpers\Format;
use Spatie\Backup\Tasks\Backup\BackupJob;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{
    public function index()
    {
        // Tampilkan view untuk membuat backup
        return view('frontend.home');
    }

    public function create()
    {
        // Jalankan backup
        try {
            Artisan::call('backup:run');
            $output = Artisan::output();
            return redirect()->back()->with('success', 'Backup berhasil dibuat. '.$output);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Backup gagal: '.$e->getMessage());
        }
    }
}
