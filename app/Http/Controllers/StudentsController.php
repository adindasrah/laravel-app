<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students/index',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // cara 1
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

//  --------------------------------------------------
        // cara 2 harus disertakan fillable
        // Student::create([
        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

// ---------------------------------------------------
        // cara 3 jika sudah pakai fillable maka bisa disingkat

        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        Student::create($request->all());

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student) //route model binding
    {
        return view('students/show', ['student' => $student]); // nama folder/method
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
