<!doctype html>
<Html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
</head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"
				style="font-size: 25px; color: white; margin-left: -35px;">Assignment-for-First-Economy</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="default"><a href="about.html">created with php and
						Laravel 5.1</a></li>


			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container --> </nav>
	<br>
	<br>
	<br>
	<center>


		<label class="text-success">Registration Form Demo - By Deepak Tiwari</label>
	</center>

<br>
   @if($errors->any())
	<center>   <div class="container">
            <section class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </section>
           </div> 
          </center>  
        @endif
	<br>

	<div class="col-md-3"></div>



	<div class="col-md-6 thumbnail">
  {!! Form::open(['action' => 'RegisterUserController@store']) !!}
  
  <div class="form-group">
   {!! Form::label('user_fn', 'First Name') !!}
   {!! Form::text('user_fn', null, array('class' => 'form-control','placeholder' => 'enter first name')) !!}
  </div>
  <div class="form-group">
   {!! Form::label('user_ln', 'last Name') !!}
   {!! Form::text('user_ln', null, array('class' => 'form-control','placeholder' => 'enter last name')) !!}
  </div>
  
    <div class="form-group">
   {!! Form::label('user_email', 'Email Add') !!}
   {!! Form::text('user_email', null, array('class' => 'form-control','placeholder' => 'enter email')) !!}
  </div>
    <div class="form-group">
   {!! Form::label('user_gender', 'select gender') !!}<br>
<!--    {!! Form::text('user_gender', null, array('class' => 'form-control','placeholder' => 'enter gender')) !!} -->
   {!! Form::select('user_gender',array('male', 'female'), 'Male') !!}
  </div>
    <div class="form-group">
   {!! Form::label('user_city', 'City') !!}
   {!! Form::text('user_city', null, array('class' => 'form-control','placeholder' => 'enter City')) !!}
  </div>
  
   <div class="form-group">
   {!! Form::label('user_state', 'State') !!}
   {!! Form::text('user_state', null, array('class' => 'form-control','placeholder' => 'enter state')) !!}
  </div>
   
   <div class="form-group">
   {!! Form::label('user_mobile', 'Mobile') !!}
   {!! Form::text('user_mobile', null, array('class' => 'form-control','placeholder' => 'enter mobile')) !!}
  </div>	  
 
  <div class="form-group">
   {!! Form::label('user_created_at', 'Created At') !!}
   {!! Form::text('user_created_at', null, array('class' => 'form-control','placeholder' => 'Created At')) !!}
  </div>	

  <div class="form-group">
   {!! Form::label('user_updated_at', 'updated At') !!}
   {!! Form::text('user_updated_at', null, array('class' => 'form-control','placeholder' => 'updated At')) !!}
  </div>	
 
  <div class="form-group">
   {!! Form::label('user_password', 'Password') !!}<br>
   {!! Form::password('user_password', null, array('class' => 'form-control','placeholder' => 'Enter Password')) !!}
  </div>
  
  
   {!! Form::submit('Register',array('class'=>'btn btn-success')) !!}
    
{!! Form::close() !!}
</div>

<div class="col-md-3"></div>


</body>

</Html>