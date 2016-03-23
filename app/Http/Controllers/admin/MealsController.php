<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Place;

class MealsController extends Controller
{
    public function add(){
        $categories=Category::where('active','=',1)->get();
        $places=Place::where('active','=',1)->get();
        return view('admin.meals.add', ['categories'=>$categories, 'places'=>$places]);
    }

    public function edit($id){
        $categories=Category::where('active','=',1)->get();
        $places=Place::where('active','=',1)->get();
        $good = Good::find($id);
        return view('admin.menu.edit', ['categories'=>$categories, 'places'=>$places, 'good'=>$good]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        Good::create($request->all());
        return back()->with('message', 'Товар добавлен');
    }

    public function show(){
        $goods = Good::with('category', 'place')->paginate(10);
        return view('admin.menu.show', ['goods' =>$goods]);
        //$goods = Good::with('category', 'place');
    }

    public function update(Request $request, $id){
        $category=Good::find($id);
        $category->update($request->all());
        $category->save();
        return redirect()->action('admin\MenuController@show')->with('message', 'Товар изменён');

    }
}
