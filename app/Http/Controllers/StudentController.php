<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return view('students' , compact('students'));
        // $students = DB::table('students')->get();
        // return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form3');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
    //   $student = new Student;
    //   $student->StudentName = $req->sname;
    //   $student->age = $req->age;
    //   $student->phone = $req->phone;
    //   $student->email = $req->email;
    //   $student->save();
    //   return "Inserted Successfully";

    // Student::create($req->only($this->column));
    // return redirect('students');


    $data= $req->validate([
        'StudentName' => 'required|max:100|min:5',
        'age' =>'required|numeric',
        'phone' =>'required|numeric|min:11',
        'email' => 'required|email:rfc|ends_with:gmail.com|unique:students,email,except,id',
    ]);
             Student::create($data);
             return redirect('students');


    // DB::table('students')->insert($req->only($this->column));
    // return redirect('students');
    // dd($req->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::findOrFail($id);
        return view('showStudents', compact('student'));
        // $student = DB::table('students')->where('id', $id)->first();
        // return view('showStudents', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::findOrFail($id);
        return view('editStudents', compact('student'));
        // $student = DB::table('students')->where('id', $id)->first();
        // return view('editStudents', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $data= $req->validate([
            'StudentName' => 'required|regex:/^[a-zA-Z\s]+$/|max:100|min:5',
            'age' =>'required|numeric',
            'phone' =>'required|numeric|digits:11',
            'email' => 'required|email:rfc|unique:students,email',

        ]);
        Student::where('id' , $id)->update($data);
        return redirect('students')->with('success', 'Student updated successfully');
        // DB::table('students')->where('id', $id)->update($req->only($this->column));
        // return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        $id = $req -> id;
        Student::where('id' , $id)->delete();
        return redirect('students');
    }

    public function trash()
    {

        $trashed=Student::onlyTrashed()->get();
        return view('trashStudent', compact('trashed'));
    }


    public function restore(string $id)
    {

        Student::where('id' , $id)->restore();
        return redirect('students');
    }

    public function forceDelete(Request $request)
    {
        $id = $request -> id;
        Student::where('id' , $id)->forceDelete();
        return redirect('trashStudent');
    }
}
