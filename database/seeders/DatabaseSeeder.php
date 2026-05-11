<?php

namespace Database\Seeders;

use Database\Seeders\MahasiswaSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            MahasiswaSeeder::class,
        ]);
    }
}
