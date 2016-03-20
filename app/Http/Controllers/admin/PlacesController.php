<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Place;

class PlacesController extends Controller
{
    public function add(){
        return view('admin.places.add');
    }

    public function store(Request $request){
        Place::create($request->all());
        return back()->with('message', 'Цех добавлен');
    }
}
