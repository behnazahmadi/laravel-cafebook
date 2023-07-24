<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Models\Post;
class MainController extends Controller
{
    public function index()
    {
         $latest_posts = Post::orderBy('created_at','DESC')->get()->take(3);
                   return view('domain.fa.pages.index');
    }
}
