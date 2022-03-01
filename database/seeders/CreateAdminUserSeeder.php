<?php

namespace Database\Seeders;

use App\Models\Brandaccount;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use App\Models\User;
use App\Models\Warehouse;
use App\Models\Warehouse_product;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Brand',
            'email' => 'mgalaladmin@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => '0000',
        ]);

        $brandaccount = Brandaccount::create([
            'name' => 'Brand',
            'email' => 'mgalalbrand@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Category::create([
            'name' => 'مستلزمات تجميل'
        ]);

        Category::create([
            'name' => 'ماسك',
            'parent_id' => 1

        ]);
        Category::create([
            'name' => 'ماسك تفتيح',
            'parent_id' => 2
        ]);
        Warehouse::create([
            'name' => 'Main',
        ]);
        Unit::create([
            'name' => 'علبة'
        ]);
        Product::create([
            'name' => 'paramol 500',
            'origin' => 'محلى',
            'company' => 'فارما',
            'effective' => 'الماده الفعاله',
            'description' => 'وصف المنتج'
        ]);
        Warehouse_product::create([
            'warehouse_id' => 1,
            'product_id' => 1,
            'unit_id'=> 1,
            'category_id'=> 1,
            'qty' => 5,
            'price_sale' => '15.50',
            'price_buy' => '10.70',
            'code' => '878676546',
        ]);





        $role = Role::create(['guard_name' => 'web', 'name' => 'Super Admin']);
        $permissions = Permission::where('guard_name', 'web')->pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        $rolebrandaccount = Role::create(['guard_name' => 'brandaccount', 'name' => 'Admin']);
        $permissions2 = Permission::where('guard_name', 'brandaccount')->pluck('id', 'id')->all();
        $rolebrandaccount->syncPermissions($permissions2);
        $brandaccount->assignRole([$rolebrandaccount->id]);
    }
}
