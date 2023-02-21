<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session as FacadesSession;



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

    public function deleteEmployee($id){
       $data = Employees::find($id);
       $data->delete();

       return redirect('show');
    }

    public function index2(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);

        $data = $request->all();

        User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>FacadesHash::make($data['password']),
        ]);

        return redirect('login')->with('success', 'Registation Completed, now you can login');
    }

    public function loginUser(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required',
        ]);

        $accept = $request->only('name', 'password');

        if (Auth::attempt($accept)){
            return redirect('show');
        }

        return redirect('login')->with('success', 'Can not login');
    }

    public function check(){
        if(Auth::check()){
            return view('show');
        }

        return redirect('login')->with('success', 'Can not access');
    }

    public function logout(){
        FacadesSession::flush();
        Auth::logout();
        return redirect('login');
    }

    /*public function __construct() {
        $this->middleware('auth');
    }*/
}


