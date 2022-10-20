<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cite;
use App\Models\User;
use App\Models\Barber;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('barbers');
        Storage::makeDirectory('barbers');
        Storage::deleteDirectory('services');
        Storage::makeDirectory('services');

        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        $this->call(BarberSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(CiteSeeder::class);
    }
}
