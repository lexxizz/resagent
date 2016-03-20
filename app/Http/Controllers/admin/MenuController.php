<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Good;
use App\Category;
use App\Place;

class MenuController extends Controller
{
    public function add(){
        $categories=Category::where('active','=',1)->get();
        $places=Place::where('active','=',1)->get();
        return view('admin.menu.add', ['categories'=>$categories, 'places'=>$places]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        Good::create($request->all());
        return back()->with('message', 'Товар добавлен');
    }

    public function show(){
        $goods = Good::with('category', 'place')->get();
        return view('admin.menu.show', ['goods' =>$goods]);
        //$goods = Good::with('category', 'place');

    }
}
