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
            'username'  => 'budi',
            'nama'      => 'budi sasongko',
            'email'     => 'superadmin@gmail.com',
            'nip'       => '123',
            'password'  => bcrypt('12345'),
        ]);
        $admin->assignRole('super admin');

        $admin = User::create([
            'username'  => 'pertiwi',
            'nama'      => 'indah pertiwi',
            'email'     => 'admin@gmail.com',
            'nip'       => '456',
            'password'  => bcrypt('12345'),
        ]);
        $admin->assignRole('admin');

        $admin = User::create([
            'username'  => 'teguh',
            'nama'      => 'teguh dimas',
            'email'     => 'user@gmail.com',
            'nip'       => '789',
            'password'  => bcrypt('12345'),
        ]);
        $admin->assignRole('user');

        $admin = User::create([
            'username'  => 'wahyu',
            'nama'      => 'wahyu dimas',
            'email'     => 'user2@gmail.com',
            'nip'       => '787',
            'password'  => bcrypt('12345'),
        ]);
        $admin->assignRole('user');
    }
}
