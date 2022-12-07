<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view ('pages.index')->with('students', $students);
    }
    
    public function create()
    {
        return view('pages.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Students::create($input);
        return redirect('/')->with('flash_message', 'Students Addedd!');  
    }
    
    public function show($id)
    {
        $student = Students::find($id);
        return view('pages.show')->with('students', $student);
    }
    
    public function edit($id)
    {
        $student = Students::find($id);
        return view('pages.edit')->with('students', $student);
    }
  
    public function update(Request $request, $id)
    {
        $student = Students::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('/')->with('flash_message', 'student Updated!');  
    }
  
    public function destroy($id)
    {
        Students::destroy($id);
        return redirect('/')->with('flash_message', 'Students deleted!');  
    }
}