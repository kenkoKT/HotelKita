<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@role.test',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $resepsionis = User::create([
            'name' => 'Resepsionis',
            'email' => 'resepsi@role.test',
            'password' => bcrypt('12345678')
        ]);

        $resepsionis->assignRole('resepsionis');

        $tamu = User::create([
            'name' => 'Tamu',
            'email' => 'user@role.test',
            'password' => bcrypt('12345678')
        ]);

        $tamu->assignRole('tamu');
    }
}
