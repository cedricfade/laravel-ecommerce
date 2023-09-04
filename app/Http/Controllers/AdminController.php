<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){

        return view('admin.home');
    }

    public function addCategory(){

        return view('admin.addcategory');
    }

    public function listcategory(){

        $categories = Category::all();

        return view('admin.categories')->with('categories',$categories);
    }

    public function addSlider(){

        return view('admin.addslider');
    }

    public function slider(){

        return view('admin.slider');
    }

    public function addProduit(){

        return view('admin.addproduit');
    }

    public function produit(){

        return view('admin.produit');
    }

    public function order(){

        return view('admin.order');
    }
    
}
