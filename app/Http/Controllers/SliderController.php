<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function saveslider(Request $request){


        $this->validate($request,[

            'description_1'=>['required'],
            'description_2'=>['required'],
            'image'=>['image','nullable','max:1999']

        ]);

        // Obtenir le nom de l'image avec l'extention
        $fileNameWithExt = $request->file('image')->getClientOriginalName();

        // Obtenir file

        $fileName= pathinfo($fileNameWithExt, PATHINFO_FILENAME);


        // Obtenir l'xtention de l'image

        $ext = $request->file("image")->getClientOriginalExtension();


        $fileNameStore = $fileName."_".time().".".$ext;

        // print($fileNameStore);


        // Uploading image in the laravel file

        $path = $request->file('image')->StoreAs('public/slider_images',$fileNameStore);

        $slider = new Slider();
        $slider->description_1 = $request->description_1;
        $slider->description_2 = $request->description_2;
        $slider->image = $fileNameStore;

        $slider->save();

        return back()->with('status','Slider créer avec succès');

    }


    public function deleteslider($id){

        $slider = Slider::find($id);
        Storage::delete("public/slider_images/$slider->image");
        $slider->delete();

        return back()->with('status','Slider supprimé avec succès');
    }

    public function sliderEdit(Request $request,$id){


        $slider = Slider::find($id);

        $slider->description_1 = $request->description_1;
        $slider->description_2 = $request->description_2;

        if ($request->file('image')) {
            $this->validate($request,[
                'image'=>'image|nullable|max:1999'
            ]);
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $request->file("image")->getClientOriginalExtension();
            $fileNameStore = $fileName."_".time().".".$ext;

            Storage::delete("public/slider_images/$slider->image");
            $path = $request->file('image')->StoreAs('public/slider_images',$fileNameStore);


            $slider->image = $fileNameStore;

        }




        $slider->update();


        return back()->with('update_slider','Slider a été mis à jour');


    }


    public function unactiveslider($id){

        $slider =  Slider::findOrFail($id);
        $slider->status = 0;

        $slider->update();

        return back()->with('inative','Slider désactivé avec succès');


    }

    public function activeslider($id){

        $slider =  Slider::findOrFail($id);
        $slider->status = 1;

        $slider->update();

        return back()->with('active','Slider activé avec succès');


    }
}
