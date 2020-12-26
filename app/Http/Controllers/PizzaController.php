<?php

namespace App\Http\Controllers;

use App\Models\Pizza;

// For some reason this went away, error was said to be on line with ' $pizzas = Pizza::all();'

class PizzaController extends Controller
{
    public function index()
    {

        $pizzas = Pizza::all();

        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
