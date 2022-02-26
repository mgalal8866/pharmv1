<?php
namespace Database\Seeders;
use App\Models\Brandaccount;
use App\Models\User;
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



$role = Role::create(['guard_name' => 'web','name' => 'Super Admin']);
$permissions = Permission::where('guard_name' , 'web')->pluck('id','id')->all();
$role->syncPermissions($permissions);
$user->assignRole([$role->id]);

$rolebrandaccount = Role::create(['guard_name' => 'brandaccount','name' => 'Admin']);
$permissions2 = Permission::where('guard_name' , 'brandaccount')->pluck('id','id')->all();
$rolebrandaccount->syncPermissions($permissions2);
$brandaccount->assignRole([$rolebrandaccount->id]);
}
}
