<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function show($slug){
        //namayeshe post hayi ba categorye entekhab shode
        $category = Category::where('slug',$slug)->first();
        $catId = $category->id;
        $blogs = Post::where('category_id',$catId)->Where('status',1)->paginate(8);
        return view('domain.fa.pages.blogs.blogs-by-category',compact('blogs','category'));
    }
}
