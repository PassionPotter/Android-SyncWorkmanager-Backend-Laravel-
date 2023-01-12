<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'SuperAdmin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('admin123456'),
                'remember_token' => null,
            ],
            
        ];

        User::insert($users);
    }
}