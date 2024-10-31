<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'identificacion'=>'required|string',
            'nombres'=>'required|string',
            'apellidos'=>'required|string',
            'direccion'=>'required|string',
            'salario'=>'required|numeric|min:0',
            'fecha'=>'required',

            
        ]);

        $fechaNacimiento = Carbon::parse($request->input('fecha'));
        $edad = $fechaNacimiento->age;

        $cobroSalario = $this->calcularSalario($request->input('salario'));
       
        $profesor = new Profesor();
        $profesor->fill($request->all());
        $profesor->edad = $edad;
        $profesor->cobroSalario = $cobroSalario; 
        $profesor->save();

        return redirect('profesores');
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
    public function edit(string $identificacion)
    {
        $profesor = Profesor::where('identificacion', $identificacion)->firstOrFail();
        return view('profesores.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $identificacion)
    {
        $request->validate([
            'identificacion'=>'required|string',
            'nombres'=>'required|string',
            'apellidos'=>'required|string',
            'direccion'=>'required|string',
            'salario'=>'required|numeric|min:0',
            'fecha'=>'required',

            
        ]);

        $fechaNacimiento = Carbon::parse($request->input('fecha'));
        $edad = $fechaNacimiento->age;

        $cobroSalario = $this->calcularSalario($request->input('salario'));
       
        $profesor = Profesor::where('identificacion', $identificacion)->firstOrFail();
        $profesor->edad = $edad;
        $profesor->cobroSalario = $cobroSalario; 
        $profesor->update($request->all());

        return redirect('profesores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $identificacion)
    {
        $profesor = Profesor::where('identificacion', $identificacion)->firstOrFail();
        $profesor->delete();
        return redirect('profesores');
    }

    public function calcularSalario($salario){

        $salud = 90000;
        $pension = 4;
        $solidaridadPensional = 1;
        $SMMLV = 1300000;

        $descuentoPension = ($salario*$pension)/100;
        $descuentoSolidaridadPensional = ($salario*$solidaridadPensional)/100;
        $cobroSalario = $salario;
        if($cobroSalario > $SMMLV * 4){
            $cobroSalario-= $descuentoSolidaridadPensional;
        }
        $cobroSalario-= $salud;
        $cobroSalario-= $descuentoPension;

        return $cobroSalario;
    }
}
