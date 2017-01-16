<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Posts;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function categorias($id)
    {
        $posts = Posts::where(['categoria_id' => $id])->get();

        return view('posts.index', compact('posts'));
    }
}
