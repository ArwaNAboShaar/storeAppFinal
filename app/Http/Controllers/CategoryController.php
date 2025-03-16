<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function indexC(){
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function createC(){
        return view('admin.categories.create');
    }

    public function storeC(Request $request){
        $categories = new Category();
        $categories-> name = $request -> name;

        $categories->save();
        return redirect() -> back();
    }

    public function destroyC($id){
        Category::where ('id',$id)->delete();
        return redirect() -> back();
    }

    public function editC($id){
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function updateC(Request $request , $id){
        $category = Category::find($id);
        $category-> name = $request -> name;
        $category->save();
        return redirect('categories');
    }
}
