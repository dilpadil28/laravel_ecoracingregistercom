<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama = ['view_users', 'add_users', 'edit_users', 'delete_users', 'view_announcements', 'add_announcements', 'edit_announcements', 'delete_announcements', 'view_tickets', 'add_tickets', 'edit_tickets', 'delete_tickets', 'view_requests', 'add_requests', 'edit_requests', 'delete_requests', 'view_services', 'add_services', 'edit_services', 'delete_services'];
        foreach ($nama as $key => $value) {
            # code...
            Permission::create(['name' => $value]);
        }
    }
}
