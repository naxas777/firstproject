<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        $names =['Naveen','Avee','Arpana'];
        return view('about',[
                 'names'=>$names
        ]);
    }
}
