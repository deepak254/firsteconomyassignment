<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<title>Edit User</title>
</head>
<body>

<nav class="navbar navbar-inverse"> 
 	<div class="navbar-header"> 
  	<a class="navbar-brand" >View and Edit User {{ $currentuser->user_fn }} Info</a>
 	</div> 
 
 	</ul>
 </nav> 
<br>

   @if($errors->any())
   <br>
	<center>   <div class="container">
            <section class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </section>
           </div> 
          </center>  
    <br>
        @endif
	
        <div class="container">
        
 {!! Form::model($currentuser, array('action' => array('RegisterUserController@update', $currentuser->id), 'method' => 'PUT')) !!}
     
    <div class="form-group">
   {!! Form::label('user_fn', 'edit First Name') !!}
   {!! Form::text('user_fn', null, array('class' => 'form-control','placeholder' => $currentuser->user_fn)) !!}
   </div>
   <div class="form-group">
   {!! Form::label('user_ln', 'edit last Name') !!}
   {!! Form::text('user_ln', null, array('class' => 'form-control','placeholder' => $currentuser->user_ln)) !!}
   </div>
  
    <div class="form-group">
   {!! Form::label('user_email', 'edit Email Add') !!}
   {!! Form::text('user_email', null, array('class' => 'form-control','placeholder' => $currentuser->user_email)) !!}
  </div>
    <div class="form-group">
   {!! Form::label('user_gender', 'select gender') !!}<br>
    {!! Form::select('user_gender',array('male', 'female'), $currentuser->user_gender) !!}
  </div>
    <div class="form-group">
   {!! Form::label('user_city', 'edit City') !!}
   {!! Form::text('user_city', null, array('class' => 'form-control','placeholder' => $currentuser->user_city)) !!}
  </div>
  
   <div class="form-group">
   {!! Form::label('user_state', 'edit State') !!}
   {!! Form::text('user_state', null, array('class' => 'form-control','placeholder' => $currentuser->user_state)) !!}
  </div>
   
   <div class="form-group">
   {!! Form::label('user_mobile', 'edit Mobile') !!}
   {!! Form::text('user_mobile', null, array('class' => 'form-control','placeholder' => $currentuser->user_mobile)) !!}
  </div>	  
 
  <div class="form-group">
   {!! Form::label('user_created_at', 'edit Created At') !!}
   {!! Form::text('user_created_at', null, array('class' => 'form-control','placeholder' => $currentuser->user_created)) !!}
  </div>	

  <div class="form-group">
   {!! Form::label('user_updated_at', 'edit updated At') !!}
   {!! Form::text('user_updated_at', null, array('class' => 'form-control','placeholder' => $currentuser->user_updated)) !!}
  </div>	

 <div class="form-group">
   {!! Form::hidden('user_password', 'edit') !!}
   {!! Form::hidden('user_password', null, array('class' => 'form-control','hidden'=>'true','placeholder' => $currentuser->user_password)) !!}
  </div>	 

    <br>
            <div class="form-group">
                {!! Form::submit( 'Update Info', ['class'=>'btn btn-primary']) !!} 

              </div>

            {!! Form::close() !!}
          

     </div>
</body>
</html>