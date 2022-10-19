<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileDisplayController;
use App\Http\Controllers\SingleProfileController;
use App\Http\Controllers\UserProfileController;


use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\MeetingsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EnquiriesController;
use App\Http\Controllers\ImageCropController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserCrudController;


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



//To Home Page
Route::get('/', [PagesController::class, 'index'])->name('home-page');

Route::get('/our-mandate', [PagesController::class, 'mandate'])->name('mandate');

//Resource UserCrud Routes
Route::resource('/usercrud', UserCrudController::class);

//Resource Routes
Route::resource('/uasu', UserProfileController::class);


//Permissions Resource Route
Route::resource('/permissions', PermissionsController::class);

//Permissions Roles Routes
Route::resource('/roles', RolesController::class);

//View Users
Route::get('/manageUsers',[ManageUsersController::class, 'index'])->name('registeredUsers');

//Edit User
Route::get('/editUser',[ManageUsersController::class, 'edit'])->name('editUsers');
//Update User
Route::put('/updateUser',[ManageUsersController::class, 'update'])->name('updateUsers');



//To About Page
Route::get('/about-us', function () {
    return view('pages.about');
  })->name('about');

  //To Chapter Officials  Page
Route::get('/chapter-officials', function () {
    return view('pages.ourteam');
  })->name('officials');

   //To Chapter Members  Page
//Route::get('/chapter-members', function () {
  //  return view('pages.members');
 // })->name('chapter-members');


   //To Chapter Officials  Page
Route::get('/chapter-downloads', function () {
    return view('pages.downloads');
  })->name('downloads');

     //To Chapter Officials  Page
Route::get('/chapter-contacts', function () {
    return view('pages.contactus');
  })->name('contact-us');




Auth::routes(['verify' =>true]);


Route::get('/dashboard', [DashboardController::class,
'redirect'])->name('dashboard')->middleware('verified');



//Path  to Individual User Profile Page showing one Profile
Route::get('/singleProfile', [SingleProfileController::class, 'viewSingleProfile'])->name('singleProfile');
Route::get('/userProfile', [UsersController::class, 'viewProfile'])->name('userProfile');

//To Edit  User Profile
Route::get('/editProfile', [UsersController::class, 'editProfile'])->name('editProfile');

//To Edit  PWD
Route::get('/editPwd', [UsersController::class, 'passwordEdit'])->name('editPwd');
//To Update PWD

Route::put('/updatePwd', [UsersController::class, 'updatePwd'])->name('updatePwd');

//To Update User Profile
Route::put('/updateProfile', [UsersController::class, 'updateUserProfile'])->name('updateProfile');



//To Update User Full Name
Route::put('/updateFullName', [UsersController::class, 'updateFullName'])->name('updateName');

//To Update Email
Route::put('/updateEmail', [UsersController::class, 'updateEmail'])->name('updateEmail');

//To Update  Specialization
Route::put('/updateMobile', [UsersController::class, 'updateMobile'])->name('updateMobile');

//To Update  Mobile
Route::put('/updateSpecialization', [UsersController::class, 'updateSpecialization'])->name('updateSpecialization');

//To Update  School
Route::put('/updateSchool', [UsersController::class, 'updateSchool'])->name('updateSchool');


//To Update About
Route::put('/updateAbout', [UsersController::class, 'updateAbout'])->name('updateAbout');


//To Update Publications
Route::put('/updatePublications', [UsersController::class, 'updatePublications'])->name('updatePublications');

//To Update Experience
Route::put('/updateExperience', [UsersController::class, 'updateExperience'])->name('updateExperience');

//To Update Consultancy
Route::put('/updateConsultancy', [UsersController::class, 'updateConsultancy'])->name('updateConsultancy');


//To Update Education
Route::put('/updateEducation', [UsersController::class, 'updateEducation'])->name('updateEducation');


//To Update User Profile Picture
Route::put('/updatePicha', [UsersController::class, 'updatePicha'])->name('updatePicha');

//Image Crop Tool
Route::post('/crop',[ImageCropController::class, 'crop'])->name('userCrop');


//Route::get('/crop', [UsersController::class, 'crop'])->name('userCrop');


//DOWNLOADS ROUTES
//Download a Report
Route::get('/download-report', [DownloadsController::class, 'reportDownload'])->name('reportDownload');
//Path to Downloads
//Route::get('/downloads', [App\Http\Controllers\DownloadsController::class, 'index'])->name('downloads.index');


//To Display User Profiles is Sidebar of Home Page and Profile Pgae
//Route::get('/displayProfile', [ProfileDisplayController::class, 'displayProfile'])->name('displayProfile');


//Route::put('/updateUasuPost', [ProfileUpdateController::class, 'updateUasuPost'])->name('updateUasuPost');

//Registered Users
Route::get('/view-users', [UsersController::class, 'index'])->name('viewUsers');


//NEWS ROUTES
//Path to News Items
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
//To Display a Single News Item to Admin and Logged in users
Route::get('/news/{newsitem:slug}', [App\Http\Controllers\NewsController::class, 'show'])->name('news.show');

Route::get('/fenews{newsitem:slug}', [PagesController::class, 'feshow'])->name('fnews.show');


//To Display a Single News Item to unlogged in users
//Route::get('/news/{news:slug}', [App\Http\Controllers\NewsController::class, 'display'])->name('news.display');

//To Create a News Title
Route::post('/createNewsTitle',[App\Http\Controllers\NewsController::class, 'createNewsTitle'])->name('newsTitle.create');

//To Create a News Item
Route::get('/create-a-news-item',[App\Http\Controllers\NewsController::class, 'createNewsPage'])->name('newsPage.create');
//To Store a News Item
Route::post('/news', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
//To Edit  a News Item
Route::get('/newsitem{newsitem}/edit', [App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
//To Update Edited  News Details
Route::put('/newsitem{newsitem}', [App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
//To Delete a News Item
Route::delete('/news{newsitem}', [App\Http\Controllers\NewsController::class, 'delete'])->name('news.delete');

//Member Profile Routes

//To Create a News Item
//Route::get('/view-profile',[App\Http\Controllers\UsersController::class, 'viewProfile'])->name('user.profile');


//ENQURIES ROUTES
//Path to Enquiries for Admin and Officials
Route::get('/enquiries', [EnquiriesController::class, 'index'])->name('enquiries.index');
//For Saving Email data to  Database
Route::post('/enquiry-info', [EnquiriesController::class, 'store'])->name('contact.send');
//To Contacts Page
Route::get('/contact-us', [EnquiriesController::class, 'contact'])->name('contact');
//To Display a Single Enquiry Item
Route::get('/enquiries/{enquiries:id}', [EnquiriesController::class, 'show'])->name('enquiry.show');


//REPORTS ROUTES
//Path to Reports
//Route::get('/reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('reports.index');
//To Create a Report Item
//Route::get('/create-a-Report',[App\Http\Controllers\ReportsController::class, 'create'])->name('report.create');
//To Store a Report Item
//Route::post('/reports', [App\Http\Controllers\ReportsController::class, 'store'])->name('report.store');
//To Edit  Report Details
Route::get('/reports{report}/edit', [ReportsController::class, 'edit'])->name('report.edit');
//To Update Edited Report Details
Route::put('/reports{report}', [ReportsController::class, 'update'])->name('report.update');
//To Delete a Report Item

Route::delete('/reports{report}', [ReportsController::class, 'delete'])->name('report.delete');

Auth::routes();


//////////////////////////////// axios request

//Route::get('/getAllPermissions', [PermissionsController::class, 'getAllPermissions']);

//Route::post("/postRole", "RoleController@store");
//Route::get("/getAllUsers", "UserController@getAll");
//Route::get("/getAllRoles", "RoleController@getAll");
//Route::get("/getAllPermissions", "PermissionsController@getAll");
