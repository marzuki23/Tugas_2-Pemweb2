<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\HomepagesController;

Route::get('/',[HomepagesController::class,'index']);

// Route::get('/', function(){
//     $title = "Homepage";
//     return view('web.homepages',['title'=>$title]);
//    });

// kode lama
//    Route::get('product', function(){
//     $title = "Product";
//     return view('web.product',['title'=>$title]);
//    });

// kode baru

Route::get('/products', [HomepagesController::class, 'products']);

    
//    Route::get('product/{slug}', function($slug){
    //     $title = "Single Product";
    //     return view('web.single_product',['title'=>$title]);
    //    });


    
        Route::get('product/{slug}', function ($slug) {
            return "halaman single product - " . $slug;
        });
        
        Route::get('categories', function () {
            return view("web.categories");
        });
        
        Route::get('category/{slug}', function ($slug) {
            return "halaman single category - " . $slug;
        });
        
        Route::get('cart', function () {
            $title = "Cart";
            return view("web.cart", ['title' => $title]);
        });
        
        Route::get('checkout', function () {
            $title = "co";
            return view("web.checkout", ['title' => $title]);
        });


//    Route::get('categori', function(){
//     $title = "Categori";
//     return view('web.categori',['title'=>$title]);
//    });
//    Route::get('category/{slug}', function($slug){
//     $title = "Single Category";
//     return view('web.single_category',['title'=>$title]);
//    });
//    Route::get('cart', function(){
//     $title = "Cart";
//     return view('web.cart',['title'=>$title]);
//    });
//    Route::get('checkout', function(){
//     $title = "Checkout";
//     return view('web.checkout',['title'=>$title]);
//    });   
   
   

require __DIR__.'/auth.php';