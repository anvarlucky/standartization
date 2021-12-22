<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Client\BaseController;
use App\Http\Controllers\Controller;
use App\Models\v1\Page;
use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;

class PageController extends Controller
{
    protected $page = 'admin.pages';

    public function index(){
        $pages = Page::all();
        return view($this->page.'.index',['pages' => $pages]);
    }

    public function create(){
        return view($this->page.'.create');
    }

    public function store(PageRequest $request){
        $request = $request->except('_token');
        $page = Page::create($request);
        if ($page ==true){
            return redirect()->route('pages.index');
        }
        else{
            return redirect()->back();
        }
    }

    public function edit($id){
        $page = Page::select('*')->where('id',$id)->first();
        return view($this->page.'.edit',['page' => $page]);
    }

    public function update($id,Request $request){
        $request = $request->except('_token');
        $page = Page::select('*')->where('id',$id)->first();
        $page->name = $request['name'];
        $page = $page->save();
        if($page == true){
            return redirect()->route('pages.index');
        }
    }

    public function destroy($id){
        $page = Page::find($id);
        $page->delete();
        if ($page==true){
            return redirect()->route('pages.index');
        }
        else{
            return redirect()->back();
        }
    }
}
