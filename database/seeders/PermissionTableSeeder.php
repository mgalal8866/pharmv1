<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =[
            'المستخدمين',
            'قائمة المستخدمين',
            'اضافة مستخدم',
            'تعديل مستخدم',
            'حذف مستخدم',
            'صلاحيات المستخدمين',

            'عرض صلاحية',
            'اضافة صلاحية',
            'تعديل صلاحية',
            'حذف صلاحية',


            'الوحدات',
            'اضافه وحده',
            'حذف وحده',
            'تعديل وحده',
            'تغير حاله وحده',

            'الاقسام',
            'اضافه قسم',
            'حذف قسم',
            'تعديل قسم',
            'تغير حاله قسم',

            'المنتجات',
            'اضافه منتج',
            'تعديل منتج',
            'حذف منتج',
            'تغير حاله منتج',

            'العملاء',
            'اضافه عميل',
            'عرض العملاء',
            'تعديل عميل',
            'حذف عميل',
            'تغير حاله عميل',

            'الطلبات',
            'عرض الطلب',

            'الاشعارات',
            'ارسال اشعار',

            'قائمه الاعدادات',
            'الاعدادات',
            'تعديل الاعدادات',

//************* UNIT*************************** */
            'viewunit',
            'newunit',
            'editunit',
            'deleteunit',
//************* CATEGORY*************************** */
            'viewcategory',
            'newcategory',
            'editcategory',
            'deletecategory',
//************* WAREHOUSE*************************** */
            'viewwarehouse',
            'newwarehouse',
            'editwarehouse',
            'deletewarehouse',
        ];
        foreach ($permissions as $permission)
        {
            Permission::create(['guard_name' => 'web','name'=> $permission]);
            Permission::create(['guard_name' => 'brandaccount','name'=> $permission]);
        }
    }

}
