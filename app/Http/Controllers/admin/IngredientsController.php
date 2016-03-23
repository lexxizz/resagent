<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ingredient;

class IngredientsController extends Controller
{
    public function add(){
        return view('admin.ingredients.add');
    }

    public function edit($id){
        $good = Ingredient::find($id);
        return view('admin.menu.edit');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        Ingredient::create($request->all());
        return back()->with('message', 'Ингредиент добавлен');
    }

    public function show(){
        $ingredients = DB::table('ingredients')->paginate(10);
        return view('admin.menu.show', ['ingredients' =>$ingredients]);
    }

    public function update(Request $request, $id){
        $category=Good::find($id);
        $category->update($request->all());
        $category->save();
        return redirect()->action('admin\MenuController@show')->with('message', 'Товар изменён');

    }
}
