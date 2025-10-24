<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $customerRole = Role::firstOrCreate(['name' => 'customer']);

        if (! User::where('email', 'admin@nebula.test')->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => 'admin@nebula.test',
                'password' => 'admin12345',
            ]);

            $admin->assignRole($adminRole);
        }

        User::whereDoesntHave('roles')->each(function (User $user) use ($customerRole) {
            $user->assignRole($customerRole);
        });
    }
}
