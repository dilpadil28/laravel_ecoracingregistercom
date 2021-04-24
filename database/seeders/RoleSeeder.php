<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'          => 'admin',
            'guard_name'    => 'web'
        ]);
        Role::create([
            'name'          => 'operator',
            'guard_name'    => 'web'
        ]);
        Role::create([
            'name'          => 'client',
            'guard_name'    => 'web'
        ]);
        $role = Role::find(1);
        $nama = ['view_users', 'add_users', 'edit_users', 'delete_users', 'view_announcements', 'add_announcements', 'edit_announcements', 'delete_announcements', 'view_tickets', 'add_tickets', 'edit_tickets', 'delete_tickets', 'view_requests', 'add_requests', 'edit_requests', 'delete_requests', 'view_services', 'add_services', 'edit_services', 'delete_services'];
        foreach ($nama as $key => $value) {
            $role->givePermissionTo($value);
        }
        $role2 = Role::find(2);
        $nama2 = ['view_users', 'add_users', 'edit_users', 'view_announcements', 'add_announcements', 'edit_announcements', 'view_tickets', 'add_tickets', 'edit_tickets', 'view_requests', 'add_requests', 'edit_requests', 'view_services', 'add_services', 'edit_services'];
        foreach ($nama2 as $key => $value) {
            $role2->givePermissionTo($value);
        }
        $role3 = Role::find(3);
        $nama3 = ['view_users', 'view_announcements', 'view_tickets', 'view_requests',  'view_services'];
        foreach ($nama3 as $key => $value) {
            $role3->givePermissionTo($value);
        }
    }
}
