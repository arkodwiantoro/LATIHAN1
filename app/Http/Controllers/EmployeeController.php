<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $data = Employee::all();
        return view('index', compact('data'));
    }

    public function tambahagent(){

        return view('tambahagent');
    }
    public function insertagent(Request $request){
        Employee::create($request->all());
        return redirect()->route('index');
    }
    public function tampilkanagent($id){
        $data = Employee::find($id);
        return view('tampilkanagent', compact('data')); 
    }

    public function updateagent(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('index');
    }
    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('index');
    }
}
