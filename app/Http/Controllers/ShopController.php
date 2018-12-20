<?php

namespace App\Http\Controllers;

use App\Product;

class ShopController extends Controller
{

    public function index() {
        // Вытащить все продукты из БД
       $products = Product::all();
       // вернуть представление и передаем туда переменную products
        return view('shop.index', compact('products'));
    }


    public function show(Product $product)
    {   
        // вернуть представление одного products и передаем туда переменную
        return view('shop.show', compact('product'));

    }



}
