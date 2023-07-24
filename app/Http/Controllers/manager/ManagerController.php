<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class ManagerController extends Controller
{
    public function index()
     {
         return view('manager.fa.pages.index');
     }
     public function usersList()
     {
        $users = User::paginate(10);
        return view('admin.manageUsers',compact('users'));
     }

     public function deleteUser($id)
     {
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.deleteuser'))->with('message','کاربر حذف شد.');
     }


}
