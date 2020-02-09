<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_u = new Role();
        $role_u->name = ‘utilisateur’;
        $role_u->description = ‘Nope’;
        $role_u->save();
        $role_a = new Role();
        $role_a->name = ‘administrateur’;
        $role_a->description = ‘Admin’;
        $role_a->save();
    }
}
