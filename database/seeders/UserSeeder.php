<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Owner',
                'email' => 'owner@mugijaya.test',
                'password' => Hash::make('password'),
                'role' => 'owner',
            ],

            [
                'name' => 'Pak Yudi',
                'email' => 'production@mugijaya.test',
                'password' => Hash::make('password'),
                'role' => 'production',
            ],

            [
                'name' => 'Pak Egi',
                'email' => 'field@mugijaya.test',
                'password' => Hash::make('password'),
                'role' => 'field',
            ],

            [
                'name' => 'Driver',
                'email' => 'driver@mugijaya.test',
                'password' => Hash::make('password'),
                'role' => 'driver',
            ],

            [
                'name' => 'Mandor Gudang A',
                'email' => 'mandor@mugijaya.test',
                'password' => Hash::make('password'),
                'role' => 'mandor',
            ],
        ];

        foreach ($users as $item) {
            $user = User::updateOrCreate(
                ['email' => $item['email']],

                [
                    'name' => $item['name'],
                    'password' => $item['password'],
                ],
            );

            $user->syncRoles([$item['role']]);
        }
    }
}
