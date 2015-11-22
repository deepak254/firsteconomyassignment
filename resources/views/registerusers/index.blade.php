<!doctype html>
<Html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>All users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
</head>

<body>
<div class="container">

<nav class="navbar navbar-inverse"> 
<ul class="nav navbar-nav"> 
 		<li><a href="{{ URL::to('registerusers') }}">View All Registered Users</a></li> 
 		<li><a href="{{ URL::to('registerusers/create') }}">Create a New User</a>
 	</ul>
 </nav> 

<h3>List of All the Registered Users.</h3>
<br><br>
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td><Strong>user FirstName</Strong></td>
			<td><Strong>User LastName</Strong></td>
			<td><Strong>User Email</Strong></td>
			<td><Strong>User State</Strong></td>
			<td><Strong>Actions</Strong></td>
		</tr>
	</thead>
	<tbody>
	@foreach($allusers as $value)
		<tr>
			<td>{{ $value->user_fn }}</td>
			<td>{{ $value->user_ln }}</td>
			<td>{{ $value->user_email }}</td>
			<td>{{ $value->user_state }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				

		<a class="btn btn-small btn-info" href="{{ URL::to('registerusers/' . $value->id . '/edit') }}">View and Edit this User Info</a> 

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</Html>
