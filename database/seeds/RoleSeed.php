<?php

use App\Models\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('read-dashboard');
        $role->givePermissionTo('update-profile');
        $role->givePermissionTo('manage-posts');


        $role = Role::create(['name' => 'newuser']);
        $role->givePermissionTo('read-dashboard');
        $role->givePermissionTo('update-profile');
	}
}