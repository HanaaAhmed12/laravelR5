<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    private $column = ['StudentName', 'age', 'phone', 'email'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::get();
        // return view('students' , compact('students'));

        $students = DB::table('students')->get();
        return view('students', compact('students'));
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


    DB::table('students')->insert($req->only($this->column));
    return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = DB::table('students')->where('id', $id)->first();
        return view('showStudents', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = DB::table('students')->where('id', $id)->first();
        return view('editStudents', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        DB::table('students')->where('id', $id)->update($req->only($this->column));
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        $id = $req->id;
        DB::table('students')->where('id', $id)->delete();
        return redirect('students');
    }
}
