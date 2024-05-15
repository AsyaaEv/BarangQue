<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimoni::create([
            'nama' => 'Adbul Aciz',
            'rating' => '4',
            'alasan' => 'Sangat membantu'
        ]);
    }
}
