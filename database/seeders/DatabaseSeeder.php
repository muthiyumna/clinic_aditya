<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();


        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'aditya@fic15.com',
            'role' => 'admin',
            'password' =>  Hash::make('12345678'),
            'phone' => '085888768516',
        ]);

        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Aditya',
            'address' => 'Kp Duri Kosambi',
            'phone' => '123456789',
            'email' => 'aditya@fic15.com',
            'doctor_name' => 'Dr. Aditya',
            'unique_code' => '12345678',
        ]);

        $this->call(DoctorSeeder::class);
    }
}
