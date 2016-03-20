<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    public function add(){
        return view('admin.categories.add');
    }

    public function store(Request $request){
        Category::create($request->all());
        return back()->with('message', 'Категория добавлена');
    }
}
