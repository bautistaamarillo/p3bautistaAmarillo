<?php

namespace App\Http\Controllers;

use App\Models\Assistance;
use Illuminate\Http\Request;
use App\Models\Audit;
use App\Models\Student;
use App\Traits\AuditTrait;

class AssistanceController extends Controller
{
   
    public function index()
    {
        
        $assistance = Assistance::all();
        return view('assistances.assistancelist', compact('assistance')); //Hacer despues una ruta, que redirija
        //a assistanceslist, al igual que con subjectslist y studentlist.
    }

   
    public function create()
    {
        return view('assistances.create');
    }

    
    public function store(Request $request)
    {
        $dniIngresado = $request->dni;
        $estudianteActual = Student::Where("dni", $dniIngresado)->first();
        $materias = $estudianteActual->subjects;

        if (isset ($estudianteActual)) {
            dd($materias);
        }
        else {
            dd("Este documento que ingreso no existe.");
        }



        
    }


    public function show(Assistance $assistance)
    {
        //
    }

   
    public function edit(string $id)
    {
        $assistance = Assistance::WHERE('ID',$id)->get();
        return view("assistances.edit",compact('assistance'));

    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        Assistance::destroy($id);
        $this->logAudit('Baja de asistencia','B');
        return redirect()->route('assistances.index');
    }
}
