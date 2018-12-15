<?php

   use App\Models\spms;
 


   //use  App\Http\Controllers\VacantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# Employee Login
Route::get('/',['as'=>'login','uses'=>'front\LoginController@index']);
Route::post('/login',['as'=>'login','uses'=>'front\LoginController@ajaxLogin']);
Route::get('logout', ['as'=>'front.logout','uses'=>'front\LoginController@logout']);

# Employee Panel After Login
Route::group(['middleware' => ['auth.employees'],'namespace' => 'front'], function()
{
    Route::get('/change_password_modal',['as'=>'front.change_password_modal','uses'=>'DashboardController@changePasswordModal']);
    Route::post('/change_password',['as'=>'front.change_password','uses'=>'DashboardController@change_password']);
    Route::get('ajaxApplications',['as'=>'front.leave_applications','uses'=> 'DashboardController@ajaxApplications']);

    Route::get('leave',['as'=>'front.leave','uses'=>'DashboardController@leave']);

    Route::post('dashboard/notice/{id}',['as'=>'front.notice_ajax','uses'=>'DashboardController@notice_ajax']);

    Route::post('leave_store',['as'=>'front.leave_store','uses'=>'DashboardController@leave_store']);

    Route::resource('dashboard','DashboardController');
});


# Admin Login
Route::group([ 'prefix' => 'admin','namespace' => 'Admin'], function()
{

    Route::get('/',['as'=>'admin.getlogin','uses'=>'AdminLoginController@index']);
    Route::get('logout',['as'=>'admin.logout','uses'=> 'AdminLoginController@logout']);

    Route::post('login',['as'=>'admin.login','uses'=> 'AdminLoginController@ajaxAdminLogin']);

});


// Admin Panel After Login
Route::group(['middleware' => ['auth.admin'], 'prefix' => 'admin','namespace' => 'Admin'], function()
{

    //	Dashboard Routing
    //Route::resource('dashboard', 'AdminDashboardController');
    Route::resource('dashboard', 'AdminDashboardController',['as' => 'admin']);

    //    Employees Routing
    Route::get('employees/export',['as'=>'admin.employees.export','uses'=>'EmployeesController@export']);
    Route::get('employees/employeeLogin/{id}',['as'=>'admin.employees.employeeLogin','uses'=>'EmployeesController@employeesLogin']);
    Route::resource('employees', 'EmployeesController',['except' => ['show'],'as' => 'admin']);



    //metronic

    route::get('metronic', function(){
		$this->data['pageTitle']     =   'Vacant';
        $this->data['setting'] = Setting::all()->first();
        $this->data['pending_applications'] = Attendance::where('application_status', '=', 'pending')->get();
                   $this->data['pending_applications'] = Attendance::where('application_status', '=', 'pending')->get();
                   $this->data['loggedAdmin'] = Auth::guard('admin')->user();
       
                   return View::make('admin.metronic.index', $this->data);

       // return View::make('admin.employees.index', $this->data);
    });


   // retirables routing

   Route::resource('retirable', 'RetirableController',['except' => ['show'],'as' => 'admin']);


   
   
    //no of vacant positions routing

   Route::get('vacant1', function(){$this->data['name'] = 'marib';spms::create($this->data);});
   Route::resource('vacant', 'VacantController',['except' => ['show'],'as' => 'admin']);
   //$this->data['pending_applications'] = Attendance::where('application_status', '=', 'pending')->get();

   // online publication and recruitment routing

   //Route::get('publication', function(){$this->data['name'] = 'roche';publication::create($this->data);});
    Route::resource('publication', 'PublicationController',['except' => ['show'], 'as' => 'admin']);
              
    // competency routing **********
    
    //$this->validate($input,[
	//	'employeeID'    =>  'required|min:5',
//		'fullName'      =>  'required|min:5'

	//]);
    
    //Route::get('competency', function(){
      //  $this->data['name'] = 'roche'; 
        //competency::create($this->data);});

    Route::resource('competency', 'CompetencyController',['except' => ['show'], 'as' => 'admin']);
    Route::get('competency/personal',['as'=>'admin.competency.personal','uses'=>'CompetencyController@personal']);        
    Route::get('competency/family',['as'=>'admin.competency.family','uses'=>'CompetencyController@family']);  

    // Training Profile routing*******************************

    Route::resource('Trainings', 'TrainingsController',['except' => ['show'], 'as' => 'admin']);

    // Rating profiles routing

    Route::resource('Ratings', 'RatingsController',['except' => ['show'], 'as' => 'admin']);
    Route::get('Ratings/downloadPDF/{id}',['as' =>'admin.rating_pdf', 'uses'=>'RatingsController@downloadPDF']);
   
        // SPMS Manual

        Route::resource('spms', 'SpmsController',['except' => ['show'],'as' => 'admin']);



    //  Awards Routing
    Route::get('ajax_awards/',['as'=>'admin.ajax_awards','uses'=> 'AwardsController@ajax_awards']);
    Route::resource('awards', 'AwardsController',['except'=>['show'],'as' => 'admin']);

    //  Department Routing
    Route::get('departments/ajax_designation/',['as'=>'admin.departments.ajax_designation','uses'=> 'DepartmentsController@ajax_designation']);
    Route::resource('departments', 'DepartmentsController',['except' => ['show','create'],'as' => 'admin']);

    //    Expense Routing
    Route::get('ajax_expenses/',['as'=>'admin.ajax_expenses','uses'=> 'ExpensesController@ajax_expenses']);
    Route::resource('expenses', 'ExpensesController',['except' => ['show'],'as' => 'admin']);

    //    Holiday Routing
    Route::get('holidays/mark_sunday', 'HolidaysController@Sunday');
    Route::resource('holidays', 'HolidaysController',['as' => 'admin']);

    //  Routing for the attendance
    Route::get('attendances/report/{attendances}', ['as'=>'admin.attendance.report','uses'=>'AttendancesController@report']);
    Route::resource('attendances', 'AttendancesController',['as' => 'admin']);

    //    Routing or the leavetypes
    Route::resource('leavetypes', 'LeavetypesController',['except'=>['show'],'as' => 'admin']);

    //    Leave Applications routing
    Route::get('leave_applications/ajaxApplications',['as'=>'admin.leave_applications','uses'=> 'LeaveApplicationsController@ajaxApplications']);
    Route::resource('leave_applications', 'LeaveApplicationsController',['except'=>['create','store','edit'],'as' => 'admin']);

    //   Routing for setting
    Route::resource('settings', 'SettingsController',['only'=>['edit','update'],'as' => 'admin']);

    //    Salary Routing
    Route::resource('salary','SalaryController',['only'=>['destroy','update','store'],'as' => 'admin']);

    //    Profile Setting
    Route::resource('profile_settings', 'ProfileSettingsController',['only'=>['edit','update'],'as' => 'admin']);

    //   Notification Setting

    Route::post('ajax_update_notification',['as'=>'admin.ajax_update_notification','uses'=> 'NotificationSettingsController@ajax_update_notification']);
    Route::resource('notificationSettings', 'NotificationSettingsController',['only'=>['edit','update'],'as' => 'admin']);

    //  Notice Board
    Route::get('ajax_notices/',['as'=>'admin.ajax_notices','uses'=> 'NoticeboardsController@ajax_notices']);
    Route::resource('noticeboards', 'NoticeboardsController',['except'=>['show'],'as' => 'admin']);

});
Event::listen('auth.login', function($user)
{
    $user->last_login = new DateTime;
    $user->save();
});
// Lock Screen Routing
Route::get('screenlock', 'Admin\AdminDashboardController@screenlock');

//Event for updating the last login of user
//Event::listen('auth.login', function($user)
//{
//    $user->last_login = new DateTime;
//    $user->save();
//});
