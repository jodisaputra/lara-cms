<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();

        User::truncate();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $author = User::create([
            'name' => 'Author',
            'email' => 'author@author.com',
            'password' => bcrypt('password')
        ]);

        $role_users = [
            [
                'role_id' => $adminRole->id,
                'user_id' => $admin->id
            ],
            [
                'role_id' => $authorRole->id,
                'user_id' => $author->id
            ]
        ];

        foreach($role_users as $role_user)
        {
            RoleUser::create($role_user);
        }
    }
}
