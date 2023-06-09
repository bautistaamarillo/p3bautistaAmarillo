<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Audit;
use App\Traits\AuditTrait;
use Illuminate\Support\Fecades\Auth;

class SubjectController extends Controller
{
    use AuditTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $subjects = Subject::all();
        return view('subjects.subjectlist', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        
        $subject = new Subject;
            $subject->name = $request->name;    
            $subject_saved = $subject->save();
            $subject_id = $subject->id;
            
            if ($subject_saved == true) {
               
                return view("subjectsettings.index",compact('subject_id'));
                $this->logAudit('Alta en subjects','A');
            }
            else {
                echo("error");
            }
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::WHERE('ID',$id)->get();
        return view("subjects.edit",compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = Subject::find($id);
        $subject -> name = $request -> name;
        $subject -> id = $request -> id;
        
        
        $subject -> save();
        $this->logAudit('Modificacion en subjects','M');
        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subject::destroy($id);
        $this->logAudit('Baja de subject','B');
        return redirect()->route('subjects.index');
    }
}
