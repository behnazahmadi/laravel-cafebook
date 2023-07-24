<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('manager.fa.pages.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('manager.fa.pages.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:32', 'string'],
            'slug' =>   'required|alpha_dash|min:5|max:255|unique:categories,slug',
            'avatar' => ['nullable', 'image', 'mimes:jpeg,jpg,png']
        ]);
        $cat = new Category;
        $cat->categoryName = $request->name;
        $cat->slug = $request->slug;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('admin/uploads/categories', $fileName);
            $image = $fileName;
            $cat->avatar = $image;

        }

        if ($cat->save())
            return view('manager.fa.pages.categories.index')->with('message', 'دسته بندی با موفقیت ذخیره شد.');
        else
            return back()->with('error', 'دسته بندی ذخیره نشد');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrfail($id);
        return view('manager.fa.pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = Category::find($id);

        $this->validate($request, [
            'name' => ['required', 'max:32', 'string'],

            'avatar' => ['nullable', 'image', 'mimes:jpeg,jpg,png'],
            'slug' => ($request->slug != $cat->slug) ?   'required|alpha_dash|min:5|max:255|unique:categories,slug' : ''
        ]);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('admin/uploads/categories', $fileName);
            $image = $fileName;
        }
        $cat->categoryName = $request->name;
        if($request->slug != $cat->slug) {
            $cat->slug = $request->slug;
        }
            $cat->save();
        return redirect(route('manager.category.index'))->with('message', 'بروز رسانی انجام شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect(route('manager.category.index'))->with('message', 'دسته بندی با موفقیت حذف شد.');
    }
}
