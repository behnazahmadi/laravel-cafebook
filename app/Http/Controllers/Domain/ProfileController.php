<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(){
        $user = User::where('id' , Auth::id())->first();
        return view('domain.fa.pages.profile.index',compact('user'));
    }
    public function update(Request $request){
//        dd($request->all());
        $this->validate($request, [
            'username' => ['max:25'] ,
            'first_name' => ['max:25'] ,
            'last_name' => ['max:25'],
            'phone_number' => ['numeric','digits:11','regex:/[0]{1}[0-9]{10}/'],
            'address' => ['max:255'],
        ]);

        User::create($request->all());

        return redirect(route('domain.profile.index'))->with('message', 'اطلاعات شما با موفقیت ذخیره شد.');
     }


    public function showComments()
    {
        $comments = Comment::where('user_id',Auth::id())->get();
        return view('domain.fa.pages.profile.comments',compact('comments'));
     }

    public function showBlogs()
    {
        $blogs = Post::where('user_id',Auth::id())->get();

        return view('domain.fa.pages.profile.blogs.index',compact('blogs'));

    }
}
