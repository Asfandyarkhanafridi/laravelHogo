<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
		    AccessLevelSeeder::class,
		    ModuleSeeder::class,
		    PrivilegeSeeder::class,
		    RoleSeeder::class,
		    RolePrivilegeSeeder::class,
            UserTypeSeeder::class,
		    UserSeeder::class,
		    UserRoleSeeder::class,
	    ]);
    }
}
