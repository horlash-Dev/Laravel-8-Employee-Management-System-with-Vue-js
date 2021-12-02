

## About Appliacation 

## EMPLOYEE MANAGEMENT SYSYTEM (EMS)

           This project is based on keeping employee records and allow employee to add or modify it own records also this application is useful for any companies or organization to keep and track record of any employee workinng in the organization. 

            Easy access to employee current region and other related information.

             To maintain employee record in the past.

## Application Features
	This application was developed with laravel framework, Vue js framework and Mysql database as the backend
	stacks used are listed below
	HTML/CSS
	BOOTSTRAP 4
	JAVASCRIPT/VUE JS FRAMEWORK
	LARAVEL FRAMEWORK
	MYSQL / MYSQL LITE

	Application Modules:
	Admin Module 
	Authentication system (FULL AUTH)
	Access Control system (Authorization with laravel Gates)
	User mamagement
	Crud opreations
	Employee module
	Employee management
	Vue imtegaration 
	note: the vue js peform it task only on the employee dashboard & employee module section (admin).

	How it works 
	The admin has acccess to all employee records and has authorization to add, edit, delete or modify any employee details.

	Admin has full capacity on all Modules in the application and Employee are limited to some of the app features .
	they are to get authenticated before they can access their dashboard and from there they can add or edit their details.
	Admin can manipulate or have access to all their details with the power of laravel Gate authorization.

	Install App

	please run the laravel migrations on your cmd terminal ensure your terminal is pointing to the application directory.

	php artisan migrate

	and run these command to initialize the admin

	php artisan db:seed

	by default the admin will be auto-generation into the system all you have to do is to login as admin to view master admin panel

	ADMIN LOGIN 
	email: admin@admin.com
	password: webadmin.

	note : once an employee is registered automatically its employee ID will be auto-generated
	as admin you can add employee from the panel vheck out employee details in the emplyee management.
	other modules such as city,country,state are all important an need to be created to give employee accesss to select it preffered region.
