<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    public function saveCategory(Request $request){

        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->save();

        return back()->with('status',"Catégory ajouté avec succès");

    }

    // FUNCTION POUR SUPPRIMER UNE DONNEE

    public function deleteCategorie($id){

        $category = Category::findOrFail($id);
        $category->delete();

        Return back()->with('delete','Votre catégorie a été supprimé avec succès');

    }


    public function categoryEdit($id, Request $request){

        $category = Category::find($id);

        $category->category_name = $request->category_name;
        $category->update();

        return back()->with('EditCategory','Catégory modifié avec succès');

    }
}
