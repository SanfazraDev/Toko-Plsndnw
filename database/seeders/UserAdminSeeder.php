<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin',
            ],
            [
                'name' => 'customer',
            ]
        ];

        foreach ($roles as $role) {
            Role::query()->create([
                'name' => $role['name'],
            ]);
        }

        $adminRole = Role::where('name', 'admin')->first();

        $user = User::query()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole($adminRole);
    }
}
