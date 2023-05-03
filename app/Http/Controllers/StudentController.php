<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Traits\AuditTrait;

class StudentController extends Controller
{
    use AuditTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        // dd($students);

        return view("students.index", compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request -> status);
            // $student = new Student;
            // $student ->name = $request -> name;
            // $student ->lastname = $request -> lastname;
            // $student ->dni = $request -> dni;
            // $student ->birthdate = $request -> birthdate;
            // $student ->status = '1';
            // $student ->save();            
        
            $student = Student::create([
                'name' => $request -> name,
                'lastname' => $request -> lastname,
                'dni' => $request -> dni,
                'birthdate' => $request -> birthdate,
                'status' => $request -> status,
            ]);

            $this->logAudit('Alta','A');
            return redirect()->route('students.index');
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
      
        
        $student = Student::WHERE('ID',$id)->get();
        return view("students.edit",compact('student'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student -> name = $request -> name;
        $student -> lastname = $request -> lastname;
        $student -> dni = $request -> dni;
        $student -> birthdate = $request -> birthdate;
        
        $student -> save();
        $this->logAudit('Modificacion','M');
        // DB::table('audits')->insert([
        //     'id' => '1',
        //     'log' => 'Alta',
        //     'action' => 'M' ,
        //     'user_id' => '5',           
        //IMPLEMENTAR UN TRAIT 
        // ]);


        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        Student::destroy($id);
        $this->logAudit('Baja','B');
        return redirect()->route('students.index');
    }
}
