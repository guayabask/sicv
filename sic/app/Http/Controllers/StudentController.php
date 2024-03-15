<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$students = Student::all();
        $students = Student::paginate(10);
        return view ('students',compact( 'students'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_student' => 'required',
            'lastname_student' => 'required',
            'birthday' => 'required|date',
            'id_student' => 'required|unique:students,id_student',
            'comments'  => 'max:255'
        ]);

        Student::create($request->all());

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student=Student::find($id);
        //dd($student); opcion desarrollador
        return view ('show-students', compact('student->activities'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        return view ('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, $id):RedirectResponse
    {
        $student=Student::find($id);
        //dd($student);
        $student->update($request->all());
        return redirect('estudiantes')->with('notificacion','Estudiante ediatado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $student = Student::find($id);
        $student->delete();
        return redirect('estudiantes');
    }
}