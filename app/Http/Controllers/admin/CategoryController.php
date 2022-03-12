<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminName=User::where('role','=','admin')->get();
        $categories=Category::all();
        return view('admin.categories.index',compact('categories','adminName'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|min:2',

        ]);


$category=new Category();
$category->category_name=$request->input('category_name');
$category->save();



        $request->flash();
        session()->flash('success', 'Your category added successfully.');
    return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $category=Category::find($id);
     return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    // $category = Category::find($id);
    // $category->update([
    //     'category_name' => $request->category_name,

    // ]);
    $category=Category::findOrFail($id);
        $category->category_name=$request->input('category_name');

        $category->update();




    $request->flash();
    session()->flash('success', 'Your category updated successfully.');
return redirect('categories');

}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $category = Category::find($id);
        $category->delete();
        $request->flash();
        session()->flash('success', 'Your category delete successfully.');
    return redirect('categories');
    }
}
