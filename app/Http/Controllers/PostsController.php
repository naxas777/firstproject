<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class PostsController extends Controller
{
    public function index(){

        $id=3;
        $posts=DB::table('posts')
        ->where('id','=', 4)
        ->delete();
        

        dd($posts);
    }
}
