<?php

namespace App\Http\Controllers;

use App\Models\SubjectSetting;
use Illuminate\Http\Request;

class SubjectSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $cantidadDias = $request->day; //Array de la cantidad de dias que va a tener esta materia. 
        foreach ($cantidadDias as $diasMateriaConfig) { //diasmateriaconfig va a contener los dias en los cuales la materia se va a realizar
            echo(env($diasMateriaConfig)); //con env, le doy valor constante a 1 2 3 4 5 como : lunes martes, etc.

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SubjectSetting $subjectSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubjectSetting $subjectSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubjectSetting $subjectSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubjectSetting $subjectSetting)
    {
        //
    }
}
