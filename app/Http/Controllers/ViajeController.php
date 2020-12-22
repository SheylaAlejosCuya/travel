<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;

class ViajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home','modal');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $viajes = Viaje::latest('updated_at','ASC')->get();
        return view('index', compact('viajes'));
        
    }
    //////Para el publico////
    public function home()
    {
        $viajes = Viaje::latest('updated_at','ASC')->get();
        return view('home', compact('viajes'));
        
    }
    public function modal(Viaje $viaje)
    {

       return view('partials/modal', [
           'viaje' => $viaje
       ]);
       
    }
    //////Fin publico/////
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create',[
            'viaje' => new Viaje
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        
        $viaje = Viaje::create($request->validated());
        $viaje_update = Viaje::find($viaje->id);
        $viaje_update->image = $request->file('image')->store('public'); 
        $viaje_update->save();

        return redirect()->route('viaje.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Viaje $viaje)
    {

       return view('show', [
           'viaje' => $viaje
       ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Viaje $viaje)
    {
        return view('edit', [
            'viaje' => $viaje
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Viaje $viaje, SaveProjectRequest $request)
    {
        $viaje->update($request->validated());
        $viaje_update = Viaje::find($viaje->id);
        $viaje_update->image = $request->file('image')->store('public');
        $viaje_update->save();  
        
        return redirect()->route('viaje.show', $viaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viaje $viaje)
    {
        $viaje->delete();
        
        return redirect()->route('viaje.index');
    }
}
