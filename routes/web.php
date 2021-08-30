<?php
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonthlyPayController;
use App\Http\Controllers\TeacherImageController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SaleInvoiceController;
use App\Http\Controllers\SaleItemController;
use App\Http\Controllers\PurchaseInvoiceController;
use App\Http\Controllers\PurchaseItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\RegistrationController;


use App\Models\Group;
use App\Models\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Route::get('/', function () {
    return view('welcome');
});

|
*/









//category

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category_create', [CategoryController::class, 'category_create'])->name('category_create');
Route::post('/category_store', [CategoryController::class, 'category_store'])->name('category_store');
Route::get('/category_edit/{id}', [CategoryController::class, 'category_edit'])->name('category_edit');
Route::post('/category_update/{id}', [CategoryController::class, 'category_update'])->name('category_update');
Route::post('/category_delete/{id}', [CategoryController::class, 'category_delete'])->name('category_delete');

//Dashboard

Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard');


//groups

Route::get('/groups', [GroupController::class, 'index'])->name('groups');
Route::get('/groups_create', [GroupController::class, 'groups_create'])->name('groups_create');
Route::post('/groups_store', [GroupController::class, 'groups_store'])->name('groups_store');
Route::get('/groups_edit/{id}', [GroupController::class, 'groups_edit'])->name('groups_edit');
Route::post('/groups_update/{id}', [GroupController::class, 'groups_update'])->name('groups_update');
Route::post('/groups_delete/{id}', [GroupController::class, 'groups_delete'])->name('groups_delete');






//file upload
Route::get('file-upload', [ImageUploadController::class, 'index'])->name('file-upload');
Route::post('file-upload', [ImageUploadController::class, 'store']);
Route::get('delete-file', [ImageUploadController::class, 'delete'])->name('delete-file');




//pages
Route::get('/', [PagesController::class, 'index'])->name('home_page');
Route::get('/all_students', [PagesController::class, 'all_students'])->name('all_students');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');





//Authendicate
Route::get('/index', [Auth\LoginController::class, 'index'])->name('index');
Route::post('/user_login', [Auth\LoginController::class, 'user_login'])->name('user_login');
Route::get('/teacher_login', [Auth\LoginController::class, 'teacher_login'])->name('teacher_login');
Route::post('/check_teacher', [Auth\LoginController::class, 'check_teacher'])->name('check_teacher');
Route::get('/admin_login', [AdminController::class, 'admin_login'])->name('admin_login');
Route::get('/logout', [SuperAdminController::class, 'logout'])->name('logout');
Route::post('/admin-login-check', [AdminController::class, 'adminLoginCheck']);

//admins

Route::get('/admins', [AdminController::class, 'index'])->name('admins');
Route::get('/admin_create', [AdminController::class, 'admin_create'])->name('admin_create');
Route::post('/admin_store', [AdminController::class, 'admin_store'])->name('admin_store');
Route::get('/admin_edit/{id}', [AdminController::class, 'admin_edit'])->name('admin_edit');
Route::post('/admin_update/{id}', [AdminController::class, 'admin_update'])->name('admin_update');
Route::post('/admin_delete/{id}', [AdminController::class, 'admin_delete'])->name('admin_delete');



//students
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/student_create', [StudentController::class, 'student_create'])->name('student_create');
Route::post('/student_store', [StudentController::class, 'student_store'])->name('student_store');
Route::get('/student_edit/{id}', [StudentController::class, 'student_edit'])->name('student_edit');
Route::post('/student_update/{id}', [StudentController::class, 'student_update'])->name('student_update');
Route::post('/student_delete/{id}', [StudentController::class, 'student_delete'])->name('student_delete');





//users
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user_create', [UserController::class, 'user_create'])->name('user_create');
Route::post('/user_store', [UserController::class, 'user_store'])->name('user_store');
Route::get('/user_edit/{id}', [UserController::class, 'user_edit'])->name('user_edit');
Route::post('/user_update/{id}', [UserController::class, 'user_update'])->name('user_update');
Route::post('/user_delete/{id}', [UserController::class, 'user_delete'])->name('user_delete');

Route::get('/user_show/{id}', [UserController::class, 'user_show'])->name('user_show');



//Teacher
Route::get('/teachers',[TeacherController::class,'index'])->name('teachers');
Route::get('/teacher_create',[TeacherController::class,'teacher_create'])->name('teacher_create');
Route::post('/teacher_store',[TeacherController::class,'teacher_store'])->name('teacher_store');
Route::get('/teacher_edit{id}',[TeacherController::class,'teacher_edit'])->name('teacher_edit');
Route::post('/teacher_update{id}',[TeacherController::class,'teacher_update'])->name('teacher_update');
Route::post('/teacher_delete{id}',[TeacherController::class,'teacher_delete'])->name('teacher_delete');


Route::get('/employee_teacher', [TeacherController::class, 'employee_teacher'])->name('employee_teacher');

//Images
Route::get('images',[TeacherImageController::class,'index'])->name('images');
Route::get('/image_create',[TeacherImageController::class,'image_create'])->name('image_create');
Route::post('/image_store',[TeacherImageController::class,'image_store'])->name('image_store');
Route::get('/image_edit{id}',[TeacherImageController::class,'image_edit'])->name('image_edit');
Route::post('/image_update{id}',[TeacherImageController::class,'image_update'])->name('image_update');
Route::post('/image_delete{id}',[TeacherImageController::class,'image_delete'])->name('image_delete');

//Monthly Payment
Route::get('/monthlyPay', [MonthlyPayController::class, 'index'])->name('monthlyPay');
Route::get('/monthlyPay_create', [MonthlyPayController::class, 'monthlyPay_create'])->name('monthlyPay_create');
Route::post('/monthlyPay_store', [MonthlyPayController::class, 'monthlyPay_store'])->name('monthlyPay_store');
Route::get('/monthlyPay_edit/{id}', [MonthlyPayController::class, 'monthlyPay_edit'])->name('monthlyPay_edit');
Route::post('/monthlyPay_update/{id}', [MonthlyPayController::class, 'monthlyPay_update'])->name('monthlyPay_update');
Route::post('/monthlyPay_delete/{id}', [MonthlyPayController::class, 'monthlyPay_delete'])->name('monthlyPay_delete');









/**************************************
*Admin Ragistration
***************************************
 // Route::get('/insert', function () {
//  $data=[
//     'admin_id'=>1,
//     'group_id'=>1,
//     'username'=>'karim',
//     'email'=>'mdkarim66@yahoo.com',
//     'password'=>'12344321',
//     'phone'=>'01818-83 07 61',
//     'address'=>'Rohanpur',
//     'created_at'=>now(),
//     'updated_at'=>now()
//    ];
//    Admin::insert($data);
//    return "User Create Successfully";
//    });
Inversely:write function in Address.php
****************************************
 public function user(){
        return $this->belongsTo(User::class);
    }
}
using controller:check
********************
  public function one_to_one()
    {
        echo '<pre>';
        $user=User::find(1);
       echo $user->name.'<br>';
       echo $user->email.'<br>';
       echo $user->address->country.'<br>';
    }
/************************************
*Delete Data
*********************************
Route::get('/delete/{id}', function ($id) {
$user = User::findOrFail($id);
        $user->delete();
        return 'Deleted';
	 });
/******************************
*Show Data/Read
**************************
Route::get('/show/{id}', function ($id) {
 $user = User::find($id);
        return $user;
	 });
**************************/
/*************************
*Edit Data/Update Data
***************************
Route::get('/edit/{id}', function ($id) {
$user=User::find($id);
        $user->name='SarkarFiroz';
        $user->email='karim_firoz@yahoo.com';
        $user->password='esif4@cc';
        $user->save();
        return 'Data Edited';
	 });
/***********************
*Create/Insert data:
***************************
Route::get('/insert', function () {
 $data=[
    'user_id'=>3,
    'state'=>'Chapai',
    'city'=>'Chittagong',
    'country'=>'Bangladesh'
   ];
   Address::insert($data);
   return "User Create Successfully";
	 });
********************************
Route::get('/orm', function () {
$data=[
'title'=>'Firoz Learning Home',
'user_id'=>2,
'description'=>'I am learning Laravel from Youtube tutorial',
'status'=>0
    ];
DB::table('posts')->insert($data);
//Post::create('$data');
return 'Post inserted';
	 });
|

|Insert
Route::get('add-post', function() {
		
	$post = new Post();
	$post->title = 'This is title';
	$post->description = 'This is description';
	$post->user_id = 1;
	$post->status = 1;
	
	$post->save();

});
|Delete
Route::get('delete-post', function() {
	// $post = Post::findOrFail(4);
	// $post->delete();

	// Post::destroy([6, 7, 8]);

	Post::where('status', 0)->delete();
});
*/