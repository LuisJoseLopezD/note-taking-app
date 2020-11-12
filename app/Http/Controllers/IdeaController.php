<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Idea; //Invocamos al modelo

class IdeaController extends Controller
{
    public function getIdeas()
    {
    	return Idea::orderBy('id', 'DESC')->get();
    }

    public function store(Request $request)
    {
    	//validación
    	$this->validate($request, [
    		'description' => 'required'
    	]);

    	//creamos la nota
    	Idea::create($request->all());

    	return;
    }
}
