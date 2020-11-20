<?php

namespace App\Http\Controllers;

use App\Models\Fotografia;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FotografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotografias = Fotografia::all();
        //$fotos = $fotografias->json();
        return view('galeria', compact('fotografias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $img = Image::make($file);
            $img->resize(1280, 720);
            $img->insert(public_path().'/assets/img/Agua5.png', 'bottom-left', 110, 70);
            $img->save(public_path().'/images/'.$name);
        }
        
        //$fotografia = Fotografia::create($request->all());

        $fotografia = new Fotografia();
        $fotografia->autor = $request->input('autor');
        $fotografia->titulo = $request->input('titulo');
        $fotografia->descripcion = $request->input('descripcion');
        $fotografia->categoria = $request->input('categoria');
        $fotografia->mes = $request->input('mes');
        $fotografia->ubicacion = 'images/'.$name;
        $fotografia->save();

        return redirect('galeria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function show(Fotografia $fotografia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Fotografia $fotografia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fotografia $fotografia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fotografia $fotografia)
    {
        //
    }
}
