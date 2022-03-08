<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection  $rows)
    {
        foreach ($rows as $row ){
            dd( $row['اسم الصنف إنجليزي'],$row['المادة الفعالة'],$row['منشأ']);
                $product = product::create([
                'name' => $row['اسم الصنف إنجليزي'],
                'slug'   => Str::slug($row['اسم الصنف إنجليزي']),
                'effective' => $row['المادة الفعالة'],
                'origin'=> $row['منشأ'],
                'company'=>'',
                'description'=>'',
                ]);
                $product->warehouse_product()->create([
                'warehouse_id'        => 1,
                'code'     =>  $row['باركود'],
                'qty' =>  $row['عدد وحدات'],
                'price_sale'         =>   $row['سعر البيع'],
                'price_buy'       =>   $row['سعر الشراء'],
                'unit_id'         =>  1,
                'category_id' =>  1,
                'special_type'=>'fixed',
                'special_price'=>'%خصم صيدلي',
                // 'special_startdate' => '',
                // 'special_enddate'=>'',
                ]);
             }
    }
}
