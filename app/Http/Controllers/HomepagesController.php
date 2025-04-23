<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Models\Categories;

class HomepagesController extends Controller
{
    //fungsi untuk menampilkan halaman homepage
    public function index()
    {
        $categories = Categories::all();
        $title = 'Homepages';
        return view('web.homepages',['title'=> $title,'categories'=>$categories]);
    }

    public function products()
    {
        $title = 'products';
        return view('web.products',['title'=> $title]);
    }

    // public function producT($slug)
    // {
    //     $title = "Single Product";
    //     return view('web.single_product',['slug' => $slug]);
    // }

    // public function categori()
    // {
    //     $title = 'categori';
    //     return view('web.categori',['title'=> $title]);
    // }
    // public function category($slug)
    // {
    //     $title = 'Category';
    //     return view('web.single_category', ['slug' => $slug]);
    // }

}
