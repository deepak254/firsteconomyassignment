<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserFormRequest extends FormRequest
{
  
	//defining validation rules For User Form.
	public function rules()
    {
        return [
            'user_fn' => 'required',
        	'user_ln' => 'required',
        	'user_city' => 'required',
        	'user_state' => 'required',
        	'user_gender' => 'required',
        	'user_mobile' => 'required|numeric|min:10',
            'user_email' => 'required|email',
        	'user_password' => 'required|min:8',
        	'user_created_at'=>	'required|date|date_format:Y-n-j',
        	'user_updated_at'=>	'required|date|date_format:Y-n-j',	
        		
        ];
    }

    public function authorize()
    {
        // Only allow logged in users
        // return \Auth::check();
        // Allows all users in
        return true;
    }

   
    
}