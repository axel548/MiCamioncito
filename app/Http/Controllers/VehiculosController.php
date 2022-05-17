<?php

namespace App\Http\Controllers;

use App\Models\Depreciaciones;
use App\Models\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculos::get();
        return view('vehiculos', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculos.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        DB::transaction(function () use($request) {
            $vehiculo = Vehiculos::create([
                'capacidad_m_cuadrados' => $request->capacidad_m2,
                'consumo_combustible_km' => $request->consumo_combustible,
                'tipo_carga' => $request->tipo_carga,
                'precio_inicial' => $request->precio
            ]);

            Depreciaciones::create([
                'depreciacion_vehiculo' => $request->depreciacion,
                'km_recorrido' => $request->km_recorrido,
                'id_vehiculo' => $vehiculo->id
            ]);
        });

        redirect()->route('vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
