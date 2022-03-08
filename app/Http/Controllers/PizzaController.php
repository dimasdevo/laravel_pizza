<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //controller
    public function index(){
        
        //$data = Pizza::all();
        //$data = Pizza::orderBy('name','desc')->get();
        //$data = Pizza::where('type','volcano')->get();
        $data = Pizza::latest()->get();
        return view('pizzas.index', [
            'pizzas'=>$data,
            'name'=>request('name'),
            'age'=>request('age')
        ]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', [
            'pizza'=>$pizza
        ]);
    }

    public function create(){
        return view('pizzas.create');
    }

}
