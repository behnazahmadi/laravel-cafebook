<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function show()
    {
        $blogs = Post::where('status',1)->simplePaginate(12);
        return view('domain.fa.pages.blogs.index', compact('blogs'));
    }




//    public function search(Request $request)
//    {
//
//        $request->validate([
//            'search' => ['required','min:3']
//        ]);
//        $results = Post::where('title' , 'like' ,"%$request->search%")
//            ->orWhere('content' , 'like' ,"%$request->search%")
//            ->simplePaginate(5);
//
//        return view('web.search', compact('results'));
//    }





    public function selectPost($slug , $id)
    {
        $category = Category::where('slug',$slug)->first();
        $catId = $category->id;
        $blog = Post::where('id',$id)->where('category_id',$catId)->first();
        return view('domain.fa.pages.blogs.show', compact('blog'));
    }

    public function create()
    {
        $category = Category::all();
        return view('domain.fa.pages.profile.blogs.create', compact('category'));
    }

    public function store(request $req)
    {
//        dd($req->all());

        $this->validate($req, [
            'title' => ['required', 'max:255'],
            'contentt' => ['required', 'min:50'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg'],
            'short_content' => ['nullable', 'max:255'],

        ]);
        // upload single image
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('client/uploads/posts/', $fileName);
            $image = $fileName;
        }
        $post = Post::create(
            [
            'title' => $req->title,
            'contentt' => $req->contentt,
            'image' => $image,
            'category_id' => $req->category_id,
            'user_id' => Auth::id(),
            ]
        );
        return redirect(route('blogs.create'))->with('info', 'پست با موفقیت ذخیره شد.بعد از تایید ادمین نمایش داده می شود.');
    }


}
