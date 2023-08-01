<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorAnimal extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animais = Animal::all();
        return view ('index', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request -> file('arquivo')->store('imagens', 'public');
        $animal = new Foto () ;
        $animal ->  nome = $request -> input ('nome');
        $animal -> idade = $request -> input ('idade');
        $animal -> especie = $request -> input ('especie');
        $animal -> raca = $request -> input ('raca');
        $animal -> sexo = $request -> input ('sexo');
        $animal -> porte = $request -> input ('porte');
        $animal -> sobre = $request -> input ('sobre');
        $animal -> arquivo = $path ;
        $animal -> save () ;
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animal = Foto::find($id);
        if(isset($aninal)){
            $arquivo = $animal -> arquivo;
            Storage::disk ('public')->delete($arquivo) ;
            $animal->delete () ;
        }
    return redirect('/');
    }
}