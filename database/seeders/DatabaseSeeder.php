<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $superadmin = User::factory()->create([
            'name' => 'Superadmin',
            'email' => 'superadmin@legitsolusi.com'
        ]);

        $roleSuperadmin = Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'owner']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'superviser']);
        Role::create(['name' => 'cashier']);

        $superadmin->assignRole([$roleSuperadmin->name]);
    }
}
