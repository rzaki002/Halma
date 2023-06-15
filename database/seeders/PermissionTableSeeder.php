<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'produk-list',
            'produk-create',
            'produk-edit',
            'produk-delete',
            'customer-list',
            'customer-create',
            'customer-edit',
            'customer-delete',
            'satuan-list',
            'satuan-create',
            'satuan-edit',
            'satuan-delete',
            'kategori_produk-list',
            'kategori_produk-create',
            'kategori_produk-edit',
            'kategori_produk-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
