<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::query()->truncate();
        Role::create(['name' => 'Superadmin','slug' => 'superadmin']);

        Role::create(['name' => 'Admin','slug' => 'admin']);

        Role::create(['name' => 'User','slug' => 'user']);
    }
}
