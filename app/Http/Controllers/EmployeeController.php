<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Session;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get  all  records
        $employees = Employee::all();
        
        //return  view
        return view('employee.show')->withEmployees($employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('employee/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate  the  data
        $this->validate($request, array(
            //validation rulles 
            'first_name' => 'required|min:3|max:191',
            'last_name' => 'required|min:3|max:191',
            'adress' => 'required|min:10|max:191',
            'telephone_number' => 'required|min:10',
            'departament' => 'required|max:191',
            'position' => 'required',
            'email' => 'required'
        ));
        
        //create a  new instance of  the model Employee
        $employee = new Employee;
        
        //store in  the  db
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->adress = $request->adress;
        $employee->telephone_number = $request->telephone_number;
        $employee->departament = $request->departament;
        $employee->position = $request->position;
        $employee->salary = $request->salary;
        $employee->email = $request->email;
        
        //save  the  obj
        $employee->save();
        Session::flash('success', 'The employee was  successfuly added!');
        //redirect to  another page
        return redirect()->route('employee.show', $employee->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('employee.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
