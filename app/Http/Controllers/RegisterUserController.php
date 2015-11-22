<?php

namespace App\Http\Controllers;
use App\RegisterUser;
use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	
    	$users = RegisterUser::all();
    	return view('registerusers.index')->with('allusers',$users);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('registerusers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {

    	//Validate and Store User and on successful store redirects to All Registered User Page.
    	
    	$registerUser = new RegisterUser;
    	$registerUser->user_fn=$request['user_fn'];
    	$registerUser->user_ln=$request['user_ln'];
    	$registerUser->user_city=$request['user_city'];
    	$registerUser->user_state=$request['user_state'];
    	$registerUser->user_password=$request['user_password'];
    	$registerUser->user_created=$request['user_created_at'];
    	$registerUser->user_updated=$request['user_updated_at'];
    	$registerUser->user_mobile=$request['user_mobile'];
    	$registerUser->user_email=$request['user_email'];
    	$registerUser->user_gender=$request['user_gender'];
    	$registerUser->save();
    	
    	return redirect()->route('registerusers.index');
    	
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
    	$user = RegisterUser::find($id);
    	
    	//Redirecting to edit.blade.php with $user variable
    	return view('registerusers.edit')->with('currentuser',$user);
        	
        	//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, $id)
    {
        //update with id 
    	$registerUser = RegisterUser::find($id);
    	
    	$registerUser->user_fn=$request['user_fn'];
    	$registerUser->user_ln=$request['user_ln'];
    	$registerUser->user_city=$request['user_city'];
    	$registerUser->user_state=$request['user_state'];
    	$registerUser->user_password=$request['user_password'];
    	$registerUser->user_created=$request['user_created_at'];
    	$registerUser->user_updated=$request['user_updated_at'];
    	$registerUser->user_mobile=$request['user_mobile'];
    	$registerUser->user_email=$request['user_email'];
    	$registerUser->user_gender=$request['user_gender'];
    	$registerUser->save();
    	return redirect()->route('registerusers.index');
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
