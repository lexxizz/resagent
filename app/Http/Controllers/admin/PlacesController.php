<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

    public function show(){
        $places = DB::table('places')->paginate(15);
        return view('admin.places.show', ['places' =>$places]);
    }
}
