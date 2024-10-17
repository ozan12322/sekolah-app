<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'lihat-user']);
        Permission::create(['name' => 'tambah-info']);
        Permission::create(['name' => 'edit-info']);
        Permission::create(['name' => 'hapus-info']);
        Permission::create(['name' => 'lihat-info']);

        Role::create(['name' => 'admin']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('lihat-user');
        $roleAdmin->givePermissionTo('tambah-info');
        $roleAdmin->givePermissionTo('edit-info');
        $roleAdmin->givePermissionTo('hapus-info');
        $roleAdmin->givePermissionTo('lihat-info');
    }
}
