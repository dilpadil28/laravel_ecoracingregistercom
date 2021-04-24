<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Request;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ];
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        if (!User::where('email', $adminUser['email'])->exists()) {
            $admin = User::create($adminUser);
            $admin->assignRole('admin');
        }
        $user = User::factory(10)->create();
        // $user->assignRole('client');
        // Member::factory(10)->create();//
    }
}
