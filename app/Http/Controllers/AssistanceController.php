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

    
    public function store(Request $request){

        $tiempoActual = Carbon::now()->format('H:i:s'); //Es la hora, minuto y segundo actual.
        $diaActual = date('w'); //Me devuelve el dia (1,2,3,4 y 5) de lunes a viernes.
        $dniIngresado = $request->dni; //Dni que ingresa para darse de alta la asistencia
        $estudianteActual = Student::Where("dni", $dniIngresado)->first(); //Estudiante cuyo dni fue ingresado
        
        $this->alreadyExist($request);

        if (isset ($estudianteActual)) {
            $materias = $estudianteActual->subjects;//Materias que cursa este estudiante.    
            foreach ($materias as $materia) {
                foreach ($materia->subjectSettings as $configuracionMateria){
                   
                    if (($configuracionMateria->day == $diaActual)
                        && ($tiempoActual >= $configuracionMateria->start_time)
                        && ($tiempoActual <= $configuracionMateria->limit_time)) {
                            $this->saveAssistance($estudianteActual,$materia);
                            return view ('assistances.message')->with('message', 'La asistencia se cargo correctamente.');
                    }
                }
            }            
            return view ('assistances.message')->with('message', 'No se cargo ninguna asistencia.');
        }
        else {
            return view('assistances.message')->with('message', 'El dni ingresado no existe.');
        }
    }
    
    public function saveAssistance($estudianteActual,$materia) {
                   $assistance = Assistance::create([
                    'student_id' => $estudianteActual->id,
                    'subject_id' => $materia->id,
                   ]);
    }

    public function alreadyExist(Request $request){
    $estudianteActual = Student::where("dni", $request->dni)->first();

    if ($estudianteActual) {
        $materias = $estudianteActual->subjects;
        foreach ($materias as $materia) {
            $asistenciaExistente = Assistance::where('student_id', $estudianteActual->id)
                ->where('subject_id', $materia->id)
                ->first();

            if ($asistenciaExistente) {
                return view ('assistances.message')->with('message', 'La asistencia ya existe.');
            }
        }
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
