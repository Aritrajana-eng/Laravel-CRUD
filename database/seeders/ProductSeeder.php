<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'name' => 'Product #1',
            'detail' => 'Product #1 details',
            'price' => 'Product #1 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #2',
            'detail' => 'Product #2 details',
            'price' => 'Product #2 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #3',
            'detail' => 'Product #3 details',
            'price' => 'Product #3 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #4',
            'detail' => 'Product #4 details',
            'price' => 'Product #4 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #5',
            'detail' => 'Product #5 details',
            'price' => 'Product #5 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #6',
            'detail' => 'Product #6 details',
            'price' => 'Product #6 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #7',
            'detail' => 'Product #7 details',
            'price' => 'Product #7 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #8',
            'detail' => 'Product #8 details',
            'price' => 'Product #8 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #9',
            'detail' => 'Product #9 details',
            'price' => 'Product #9 price'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #10',
            'detail' => 'Product #10 details',
            'price' => 'Product #10 price'
        ]);
        $product->save();
    }
}
