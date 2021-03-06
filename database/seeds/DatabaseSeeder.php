<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AppsTableSeeder::class);
        $this->call(SystemFileInfosTableSeeder::class);
        $this->call(KeyValuesTableSeeder::class);
        $this->call(DocksTableSeeder::class);
        $this->call(WallpapersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
