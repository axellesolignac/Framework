<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_u = Role::where(‘name’, ‘utilisateur’)->first();
        $role_a  = Role::where(‘name’, ‘administrateur’)->first();
        $u = new User();
        $u->name = ‘Utilisateur’;
        $u->email = ‘employee@example.com’;
        $u->password = bcrypt(‘secret’);
        $u->save();
        $u->roles()->attach($role_u);
        $a = new User();
        $a->name = ‘Admin’;
        $a->email = ‘manager@example.com’;
        $a->password = bcrypt(‘secret’);
        $a->save();
        $a->roles()->attach($role_a);
    }
}
