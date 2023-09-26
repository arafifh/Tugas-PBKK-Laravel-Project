<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('form');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students',
            'nrp' => 'required|string',
            'department' => 'required|string',
            'ipk' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Max 2 MB
        ]);
    
        $photoPath = $request->file('photo')->store('photos', 'public');
    
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'nrp' => $request->nrp,
             'department' => $request->department,
            'ipk' => $request->ipk,
            'photo' => $photoPath,
        ]);
    
        return redirect()->route('data');
    }

    public function show() {
        $data = Student::paginate(20);

        return view('data', compact('data'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email,' . $id,
            'nrp' => 'required|string',
            'department' => 'required|string',
            'ipk' => 'required',
        ]);

        $student = Student::findOrFail($id);
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'nrp' => $request->nrp,
            'department' => $request->department,
            'ipk' => $request->ipk,
        ]);

        return redirect()->route('data')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('data')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
