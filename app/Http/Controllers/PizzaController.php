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

    public function store(){
        
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('mssg','Thank for you order');
    }

    public function destroy($id){
        
        $pizza = Pizza::findOrFail($id);

        $pizza->delete();

        return redirect('/pizzas');
    }

}
