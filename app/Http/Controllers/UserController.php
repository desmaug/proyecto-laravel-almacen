<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function config(){
        return view('user.config');
    }

    public function update(Request $request){

        //conseguimos el usuario identificado

        $user = Auth::user();
        $id = $user->id;

        //validacion form

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id
        ]);
        
        //recoger datos form
        $name = $request->input('name');
        $email = $request->input('email');

        //asignar nuevos valore al objeto de user

        $user->name = $name;
        $user->email = $email;

        //Subir la imagen

        $image_path = $request->file('image_path');
        if ($image_path) {
            //poner nombre unico
            $image_path_name = time().$image_path->getClientOriginalName();
            
            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('users')->put($image_path_name, File::get($image_path));

            //Seteo el nombre de la imagen en el objeto
            $user->image = $image_path_name;
        }

        //ejecutar consulta y cambios en la base de datos

        $user->update();

        return redirect()->route('user.config')->with(['message'=>'Usuario actualizado correctamente']);

    }

    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);

        return new Response($file, 200);

    }
}







