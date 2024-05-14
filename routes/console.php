<?php

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Schedule::job(function () {
//     Pengembalian::delete_pengembalian();
// })->everyMinute();
Schedule::job(function () {
    Peminjaman::infoDeadlinePeminjaman();
})->everyFiveSeconds();
// Schedule::job(function () {
//     Peminjaman::infoTanggalPeminjaman();
// })->everyMinute();
