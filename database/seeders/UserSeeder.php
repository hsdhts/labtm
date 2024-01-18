<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username' => 'teknisi',
            'nama' => 'Budak Korporat',
            'level' => 'Teknisi',
            'password' => bcrypt('1234'),
            'last_login' => Carbon::parse('18-01-2024 23:34:45'),
        ]);

        User::create([
            'username' => 'supervisor',
            'nama' => 'Supervisor',
            'level' => 'Supervisor',
            'password' => bcrypt('1234'),
            'last_login' => Carbon::parse('17-12-2023 23:34:45'),
        ]);
        User::create([
            'username' => 'manager',
            'nama' => 'Si paling manager',
            'level' => 'Manager',
            'password' => bcrypt('1234'),
            'last_login' => Carbon::parse('03-12-2023 19:34:45'),
        ]);
        User::create([
            'username' => 'admin',
            'nama' => 'Si Paling Admin',
            'level' => 'Admin',
            'password' => bcrypt('1234'),
            'last_login' => Carbon::parse('13-01-2023 23:34:45'),
        ]);
        User::create([
            'username' => 'superuser',
            'nama' => 'Akulah Arjuna',
            'level' => 'Superuser',
            'password' => bcrypt('1234'),
        ]);
    }
}
