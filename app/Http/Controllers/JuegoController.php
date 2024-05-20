<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Genero;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juegos = Juego::all();
        return view('juegoIndex', compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Genero::all();
        return view('juegoCreate', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $juego = new Juego();
        $juego->nombre = $request->nombre;
        $juego->marca = $request->marca;
        $juego->precio = $request->precio;
        $juego->save();

        $juego->generos()->attach($request->generos);
        
        Session()->flash('success','Se guardo perro sarnozo');
        return redirect('/juego');
    }

    /**
     * Display the specified resource.
     */
    public function show(Juego $juego)
    {
        return view('/juegoShow', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juego $juego)
    {
        $generos = Genero::all();
        return view('juegoEdit', compact('generos','juego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juego $juego)
    {
        //Juego::where('id', $juego->id)->update($request->except('_token', '_method', 'action'));

        $juego->nombre = $request->nombre;
        $juego->marca = $request->marca;
        $juego->precio = $request->precio;
        $juego->save();

        if ($request->has('generos')) {
            $juego->generos()->sync($request->generos);
        }else{
            $juego->generos()->detach();
        }

        return redirect('/juego');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juego $juego)
    {
        $juego->delete();
        Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/juego');
    }
}
