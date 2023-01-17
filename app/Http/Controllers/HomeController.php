<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Ejemplo 1
        // $product = Product::where('code', '0001')->first();
        //
        // if ($product === null) {
        //     $product = new Product(['code' => '0001']);
        // }
        //
        // $product->name = 'producto nuevo';
        //
        // echo 'Producto: ' . $product;

        //$product->save();

        // $product = Product::query()->firstOrNew(
        //     ['code' =>  '0004'],
        //     ['name' => 'producto nuevo 1', 'price' => 10]
        // );
        //
        // $product->save();

        // echo 'Producto: ' . $product;
        // return view('home');
        //

        //Ejemplo 2

        // $product = Product::where('code', '0001')->first();
        //
        // if ($product === null) {
        //     $product = Product::create([
        //         'code' => '0006',
        //         'name' => 'producto nuevo 6',
        //         'price' => 700
        //     ]);
        // }


        // $product = Product::query()->firstOrCreate(
        //     ['code' =>  '0005'],
        //     ['name' => 'producto nuevo 2', 'price' => 100]
        // );
        //
        // echo 'Producto: ' . $product;
        //


        //Ejemplo 3

        // $product = Product::where('code', '0001')->firstOr(function () {
        //     $category = Category::create([ //... ]);
        //  
        //     return Producto::create([
        //         'category_id' => $category->id,
        //         'code' => '0001',
        //         'price' => 550,
        //     ]);
        // });


        // Ejemplo 4

        // $product = Product::where('code', '0001')->first();
        //
        // if ($product !== null) {
        //     $product->update(['code' => '0020']);
        // } else {
        //     $product = Product::create([
        //         'code' => '0009',
        //         'name' => 'producto nuevo 9',
        //     ]);
        // }
        //
        // echo 'Producto: ' . $product;

        // $product = Product::updateOrCreate(
        //     ['code' =>  '0030'],
        //     ['name' => 'producto nuevo 30', 'price' => 300]
        // );
        //
        // echo 'Producto: ' . $product;


        //Ejemplo 5

        // Product::query()->upsert([
        //     ['code' => '0050', 'name' => 'producto 50', 'price' => 99],
        //     ['code' => '0051', 'name' => 'producto 51', 'price' => 100],
        //     ['code' => '0052', 'name' => 'producto 52', 'price' => 101],
        // ], ['code'], ['price']);
        //
        return view('home');
    }
}
