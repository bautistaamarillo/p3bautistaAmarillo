<?php

namespace App\Http\Controllers;

use App\Models\Assistance;
use Illuminate\Http\Request;
use App\Models\Audit;
use App\Models\Student;
use App\Models\Subject;
use App\Traits\AuditTrait;
use Carbon\Carbon;

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
        $tiempoActual = Carbon::now()->format('H:i:s'); //Es la hora, minuto y segundo actual.
        $diaActual = date('w'); //Me devuelve el dia (1,2,3,4 y 5) de lunes a viernes.
        
        $dniIngresado = $request->dni; //Dni que ingresa para darse de alta la asistencia
        $estudianteActual = Student::Where("dni", $dniIngresado)->first(); //Estudiante cuyo dni fue ingresado
        $materias = $estudianteActual->subjects; //Materias que cursa este estudiante.

        if (isset ($estudianteActual)) { //SI ESTUDIANTE ACTUAL EXISTE ENTONCES:
            foreach ($materias as $materia) {
                foreach ($materia->subjectSettings as $configuracionMateria){
                echo($configuracionMateria->day).'<br>'; // hacer la comparacion entre dias y hora actual

                }
            }
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
