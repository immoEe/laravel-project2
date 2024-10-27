<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function showIndex() {
        return view('home');
    }

    function showArray() {
        $array = [
            ['id' => 1, 'title' => 'Nike Pro XSS3', 'price' => 2500, 'imgPath' => 'img/product-images/nikepro.png'],
            ['id' => 2, 'title' => 'Nike Slim NL', 'price' => 3300, 'imgPath' => 'img/product-images/nikepronl.png'],
            ['id' => 3, 'title' => 'Nike Pro Proffesional', 'price' => 8300, 'imgPath' => 'img/product-images/nikeprof.png'],
            ['id' => 3, 'title' => 'Nike Aorus 76', 'price' => 4300, 'imgPath' => 'img/product-images/nikeaorus.png'],
        ];    
    
        return view('array', compact('array'));
    }
    
}
