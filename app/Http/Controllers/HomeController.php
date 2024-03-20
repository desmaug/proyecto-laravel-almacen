<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Image;
use Livewire\WithPagination;


class HomeController extends Controller
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    //
    public function index(){


        $image = Image::orderBy('id','desc')->paginate(2);

        return view('home',[
            'images' => $image
        ]);

    }
}
