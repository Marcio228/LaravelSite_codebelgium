<?php

use Illuminate\Database\Seeder;
use App\Models\Auth\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'      => 'Vinay Bansal',
            'email'     => 'admin@admin.com',
            'password'  => '$2y$10$oT1RxKhE8m8LrG2t9.hSiOew.hfgJdWB/yopJ2LvSCN4W3JbNhuM2',
        ]);
        $user->assignRole('administrator');
    }
}