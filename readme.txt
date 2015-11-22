Technologies Used:
=====================
1) Laravel 5.0 framework.
2) XAMPP server for running the application.
3) Blade Template for Form Templating and Bootstrap for styling.
4) Mysql for Database.
5) Form Request validation for Validating data.


Project Files and Locations
============================= 
MODEL: DB model file : app/RegisterUser.php
	   DB Schema File : database/migrations/2015_11_21_212433_create_registeruser_table.php
VIEWS: 
a) For Register a new User-  resources/views/registerusers/create.blade.php
b) For Showing  all Registers Users in table Format - resources/views/registerusers/index.blade.php
c) For edit a  User-  resources/views/registerusers/edit.blade.php

ROUTES:
	app/Http/routes.php

CONTROLLER:
	app/Http/Controllers/RegisterUserController.php

REQUEST VALIDATION:
	app/Http/Requests/UserFormRequest.php
		
	
