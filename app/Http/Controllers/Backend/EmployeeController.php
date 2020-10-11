<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;
use App\Models\Auth\User;

class EmployeeController extends Controller
{

    protected function validator(Request $request)
    {
        //user_id, department_id, gender, doj, dol, details, position_id
        return Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'department_id' => 'required|integer',
            'gender' => 'in:Male,Female',
            'doj' => 'required|date',
            'doj' => 'required|date',
            'details' => 'required|max:150|min:10|string',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$employees = Employee::all();
        $employees = Employee::with('position')->get();
        return view('backend.employee.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.employee.create', 
            [
                'departments' => Department::pluck('name', 'id'), 
                'positions' => Position::pluck('title', 'id'),
                'users' => User::pluck('first_name', 'id')
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //user_id, department_id, gender, doj, dol, details

        if ($this->validator($request)->fails()) {
            return redirect()->back()
                        ->withErrors($this->validator($request))
                        ->withInput();
        }

        $employee = new Employee;
        //$employee = $request->all();
        $employee->user_id = Auth::user()->id;
        $employee->department_id = $request->department_id;
        $employee->gender = $request->gender;
        $employee->doj = $request->doj;
        $employee->dol = $request->dol;
        $employee->details = $request->details;
        //dd($request);
        
        $employee->save();
        $employee->positions()->attach($request->position_id);

        return redirect()->route('admin.employee.index')->withFlashSuccess(__('alerts.backend.employees.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('backend.department.edit', ['departments' => Department::findOrFail($id)]);
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
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        //$post->tags()->sync($request->tags, true);
        
        $department = Department::findOrFail($id);

        $department->update($request->all());

        return redirect()->route('admin.department.index')->withFlashSuccess(__('alerts.backend.departments.updated'));
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
        //for delete many to many like post-tag example
        $post= Post::find($id);
        //detach the relationship before you destroy
        $post = tags()->detach();
    }
}
