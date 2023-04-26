<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        // DB::table('audits')->insert([
        //     'id' => 'Horacio',
        //     'lastname' => 'Guarani',
        //     'dni' => '36978541' ,
        //     'birthdate' => '1998/12/12',
        //     'status' => 1
        // ]);

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
