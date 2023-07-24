<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Post::paginate(12);
        return view('manager.fa.pages.blogs.index',compact('blogs'));
    }

    public function edit($id)
    {
        $blog = Post::where('id',$id)->first();
        return view("manager.fa.pages.blogs.edit",compact("blog"));
    }

    public function update(request $request,$id)
    {
        $blog = Post::find($id);

        $this->validate($request, [
            'title' => ($request->title != $blog->title) ? ['max:255','unique:posts'] : '',
            'reading_time' => ['required'],
            'status' => ['required'],
            'short_content' =>['required'],
        ]);


        if (!empty($request->title))
        {
            $blog->title = $request->title;

        }
        if(!empty($request->contentt)) {
            $blog->contentt = $request->contentt;
        }
        // upload single image
            if (!empty($request->image)) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $ext;
                $file->move('client/uploads/posts/', $fileName);
                $image = $fileName;
                $blog->image = $image;

            }
        $blog->reading_time = $request->reading_time;
        $blog->status = $request->status;
        $blog->short_content = $request->short_content;
        if($blog->save()) {
            return redirect(route('manager.blogs.index'))->with('message', 'بلاگ با موفقیت ویرایش شد.');
        }
    }

    public function destroy($id)
    {
        $blog = Post::where('id',$id)->first();
        $blog->delete();
        return back();
    }
}
