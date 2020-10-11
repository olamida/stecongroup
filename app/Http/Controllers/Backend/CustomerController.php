<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Country;

use Propaganistas\LaravelPhone\PhoneNumber;

class CustomerController extends Controller
{
    

    protected function validator(Request $request)
    {
        //fname, lname, dob, email, phone, avatar_type, avatar_location, type,
        return Validator::make($request->all(), [
            'fname' => 'required|max:110|min:2|string',
            'lname' => 'required|max:110|min:2|string',
            'dob' => 'required|max:110|min:2|string',
            'email' => '|email|unique:customers',
            'phonenumber' => 'phone:phonenumber_country',
            'phonenumber_country' => 'required_with:phonenumber',
            
            //'slug'          => 'required|alpha_dash|min:3|max:255|unique:categories',
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
        $customers = Customer::all();
        $countries = Country::all();
        return view('backend.customer.index', ['customers' => $customers, 'countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.customers.create', ['country' => Country::pluck('name', 'code')]);
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

        if ($this->validator($request)->fails()) {
            return redirect()->back()
                        ->withErrors($this->validator($request))
                        ->withInput();
        }


        //dd($request);
        //user_id, fname, lname, dob, email, phone, phone_confirm, avatar_type, avatar_location, type,        //$data = new Category;
        //$created = Auth::user()->id;

        $data = new Customer;
        $data->type = $request->type;
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->dob = $request->dob;
        $data->email = $request->email;

        $phone_number = PhoneNumber::make($request->phonenumber)->ofCountry($request->phonenumber_country);  

        $data->phone = $phone_number;
        
        $data->save();

        return redirect()->route('admin.customer.index')
            ->withFlashSuccess(__('alerts.backend.customers.created'));        
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
