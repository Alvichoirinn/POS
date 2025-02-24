<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage(){
        return view('blog.foodBeverage');
    }

    public function beautyHealth(){ // Perbaikan typo
        return view('blog.beutyHealth');
    }

    public function homeCare(){
        return view('blog.homeCare'); // Perbaikan path view
    }

    public function babyKid(){
        return view('blog.babyKid');
    }
}

