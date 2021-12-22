<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\v1\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    protected $category = 'admin.categories';

    public function index(){
        $categories = Category::all();
        return view($this->category.'.index',['categories' => $categories]);
    }

    public function create(){
        return view($this->category.'.create');
    }

    public function store(CategoryRequest $request){
        $request = $request->except('_token');
        $category = Category::create($request);
        if ($category ==true){
            return redirect()->route('categories.index');
        }
        else{
            return redirect()->back();
        }
    }

    public function edit($id){
        $category = Category::select('*')->where('id',$id)->first();
        return view($this->category.'.edit',['category' => $category]);
    }

    public function update($id,Request $request){
        $request = $request->except('_token');
        $category = Category::select('*')->where('id',$id)->first();
        $category->name = $request['name'];
        $category = $category->save();
        if($category == true){
            return redirect()->route('categories.index');
        }
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        if ($category==true){
            return redirect()->route('categories.index');
        }
        else{
            return redirect()->back();
        }
    }
}
