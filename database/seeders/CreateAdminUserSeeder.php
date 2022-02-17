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
'password' => bcrypt('123456')
]);

$brandaccount = Brandaccount::create([
    'name' => 'Brand',
    'email' => 'mgalalbrand@gmail.com',
    'password' => bcrypt('123456')
    ]);



$role = Role::create(['name' => 'Admin']);
$permissions = Permission::pluck('id','id')->all();
$role->syncPermissions($permissions);
$user->assignRole([$role->id]);


$brandaccount->assignRole([$role->id]);
}
}
