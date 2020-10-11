<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;

class DepartmentController extends Controller
{

    protected function validator(Request $request)
    {
        //title, code, description, picture
        return Validator::make($request->all(), [
            'name' => 'required|max:150|min:5|string',
            'code' => 'max:50|min:2|string',
            'description' => 'max:250|min:5|string',
            'image' => 'sometimes|image:jpeg,bmp,png,gif',
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //user_id, title, code, description, picture

    public function index()
    {
        //
        $departments = Department::all();
        return view('backend.department.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //user_id, title, code, description, picture

        if ($this->validator($request)->fails()) {
            return redirect()->back()
                        ->withErrors($this->validator($request))
                        ->withInput();
        }

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['name'] = $request->name;
        $data['code'] = $request->code;
        $data['description'] = $request->description;
        //dd($data);
        
        Department::create($data);
        return redirect()->route('admin.department.index')->withFlashSuccess(__('alerts.backend.departments.created'));
    
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
    }
}
