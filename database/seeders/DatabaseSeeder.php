<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Peminjaman::updateOrCreate([
            'id_barang' => 'LP001',
            'keperluan' => 'testing',
            'tgl_peminjaman' => '04-04-2024',
            'tgl_pengembalian' => '05-04-2024',
            'foto' => 'tets.jpg',
            'peminjam' => 'Adbul acizz',
        ]);
    }
}
