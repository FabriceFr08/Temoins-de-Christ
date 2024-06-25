<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        return view('formations.index');
    }

    public function create(){
        return view('formations.create');
    }

    public function store(Request $request){
        dd($request->all());
        return redirect()->route('accueil')->with('success', 'Inscription validée avec succès');
    }
}
