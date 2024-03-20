<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Models\Image;

class ImageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('image.create');
    }

    public function save(Request $request){

        //validacion

        $request->validate([
            'description' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'image_path.image' => 'El archivo debe ser una imagen.',
        ]);

        //recoger datos
        $image_path = $request->file('image_path');
        $description = $request->input('description');

        //asignar valores al objeto
        $user = Auth::user();
        $image = new Image();
        $image->user_id = $user->id;
       
        $image->description = $description;


        if (isset($image_path)) {
            $image_path_name = time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $image->image_path = $image_path_name;
        }

        $image->save();

        return redirect()->route('image.create')->with([
            'message' => 'La foto ha sido subida correctamente!!!'
        ]);

    }
    public function getImage($filename){

        $file = Storage::disk('images')->get($filename);

        return new Response($file, 200);
    }

    public function detail($id){
        $image = Image::find($id);
        return view('image.detail',[
            'image' => $image
        ]);
    }
}
