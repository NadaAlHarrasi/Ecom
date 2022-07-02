<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $record = new Product;
        $record = new Product;
        $record->name = "Product A";
        $record->name_ar = "المنتج الأول";
        $record->price = 10;
        $record->image_path=" ";
        $record->category_id = 1;
        $record->save();

    }
}
