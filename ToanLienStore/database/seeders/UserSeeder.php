<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Laravel\Facades\Activation;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::find(3);
        $user = [
            'name' => 'client1',
            'email' => 'client_1@gmail.com',
            'password' => bcrypt(123456), // 123456 
        ];

        UserRole::query()->truncate();
        User::query()->truncate();

        $user = User::create($user);
        $activation = Activation::create($user);
        Activation::complete($user, $activation->code);
        $userRole->users()->attach($user);
    }
}
