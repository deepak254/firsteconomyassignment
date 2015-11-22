<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//Model Class For Register User
class RegisterUser extends Model
{
	protected $table = 'registeruser';
	protected $fillable = [
	'user_fn',
	'user_ln',
	'user_city',
	'user_state',
	'user_password',
	'user_created',
	'user_updated',
	'user_mobile',
	'user_email',
	'user_gender'
    ];	
    
}
