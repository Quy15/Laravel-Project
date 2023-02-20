<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;


class EmployeesController extends Controller
{
    public function index(){
        $employee = Employees::latest()->paginate(5);
        return view('show', compact('employee'));
    }

    /*public function get_employee(){
        $employee = Employees::all();
        return view('employeelist', compact('employee'));
    }*/

    public function editEmployee($id){
        /*return $id;*/
        $employee = Employees::where('id', $id)->get();
        return view('editEmployee', ['employees'=>$employee]);
    }

    public function updateEmployee(Request $request){
        
       $id = $request->id;
       $firstname = $request->input('firstname');
       $lastname = $request->input('lastname');
       $position = $request->input('position');

       $isUpdateSuccess = Employees::where('id', $id)->update(['firstname'=>$firstname,
                                                                'lastname'=>$lastname,
                                                                'position'=>$position]);
        if ($isUpdateSuccess) return redirect('/show');
        else echo '<h1>Update Failed</h1>';
    }
}


