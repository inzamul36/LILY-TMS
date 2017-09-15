<?php

namespace App\Http\Controllers;

use App\Staff;
use App\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all()->where('staff_delete', '0');
        return view('staff/index')->with('staffs', $staffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new Staff(Input::all());

        if($staff->save())
        {
            Session::flash('notice','Staff was successfully created');
            return redirect('staffs');
        }
        else
        {
            Session::flash('alert','Staff was not successfully created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::find($id);
        $staff_salary = Salary::all()->where('staff_id', $id);
        return view('staff/show')->with('staff', $staff)->with('staff_salary', $staff_salary);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staff/edit')->with('staff', $staff);
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
        $staff = Staff::find($id);
        $staff->update(Input::all());

        if($staff->save())
        {
            Session::flash('notice','Staff was successfully updated');
            return redirect('staffs');
        }
        else
        {
            Session::flash('alert','Staff was not successfully updated');
            return redirect('staffs/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->staff_delete ='1';
        
        if ($staff->save())
        {
            return redirect('staffs');
        }   
    }
}
