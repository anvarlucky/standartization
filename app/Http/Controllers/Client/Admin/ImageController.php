<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\v1\Image;
use App\Models\v1\Standart;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadphoto(){
        $standarts = Standart::all();
        return view('admin.images.uploadimages',['standarts'=>$standarts]);
    }

    public function savephoto(Request $request){
        $image_count = count($request->image);
        if ($image_count == 1){
        $image = Image::create($request->all());
        }

       else{
            foreach ($request->image as $img){
                dump($img);
                //$image = Image::create($request->all());
            }
            $image = Image::create($request->all());
            dd('sdsd');
       }
        return redirect()->route('up');
    }
}
