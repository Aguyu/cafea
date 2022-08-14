<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\signupRequest;
use App\Models\Employee;

class signupController extends Controller
{
    public function index(){
        return view('signup');
    }
    public function create(signupRequest $request) {

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->password = $request->password;
        $employee->address = $request->address;
        $employee->gender = $request->gender;

        $employee->save();
        return redirect()->route('login');
    }
}
