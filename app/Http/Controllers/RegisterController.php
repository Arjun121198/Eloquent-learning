<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Employee;


class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerForm(Request $request)
    {
        $Employee = Employee::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
          ]);
        $address = Address::create([
            'address' => $request['address'],
            'employee_id'=> $Employee->id,
        ]);
        return redirect('employeeList');
    }
    public function employeeView($id)
    {
      $employee = Employee::findorfail($id);
    //   dd($employee);
     return view('employee-view',compact('employee'));
    }

    public function employeeList()
    {
      $employeeList = Employee::get()->toArray();
        return view('employee-list',compact('employeeList'));
    }
}
