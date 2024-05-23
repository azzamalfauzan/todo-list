<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View
    {
     $posts = post::latest()->paginate(5);

     return View('post.index', compact('posts'));
    }



    public function create(): View
    {
        return view('post.create');
    }

}
