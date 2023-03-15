<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $roles = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'editor'
            ],
            [
                'name' => 'author'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
