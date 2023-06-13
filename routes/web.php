<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {

//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/all-category', [App\Http\Controllers\HomeController::class, 'allcategory']);
Route::get('/category-details', [App\Http\Controllers\HomeController::class, 'categoryDetails']);

Auth::routes();
Route::get('admin/login', [App\Http\Controllers\backend\AdminController::class, 'loginform'])->name('logout');
Route::Post('admin/login', [App\Http\Controllers\backend\AdminController::class, 'login']);
 Route::group(['middleware' => ['auth']], function () {
         Route::get('admin/dashboard', [App\Http\Controllers\backend\AdminController::class, 'index'])->name('dashboard');
         Route::get('admin/todaySummary', [App\Http\Controllers\backend\AdminController::class, 'todaySummary']);
         Route::get('admin/logout', [App\Http\Controllers\backend\AdminController::class, 'logout']);
         Route::get('admin/customer', [App\Http\Controllers\backend\AdminController::class, 'showCustomer']);
         Route::get('admin/associate', [App\Http\Controllers\backend\AdminController::class, 'showAssociate']);


//category----------------------------------->>>>>
         Route::get('admin/category', [App\Http\Controllers\backend\CategoryController::class, 'index']);
         Route::get('admin/category/create', [App\Http\Controllers\backend\CategoryController::class, 'create']);
        Route::post('admin/category/store', [App\Http\Controllers\backend\CategoryController::class, 'CategoryStore']);
         Route::get('admin/category/edit/{id}', [App\Http\Controllers\backend\CategoryController::class, 'categoryEdit']);
          Route::put('admin/category/update', [App\Http\Controllers\backend\CategoryController::class, 'categoryUpdate']);
          Route::get('admin/category/delete/{id}', [App\Http\Controllers\backend\CategoryController::class, 'categoryDelete']);



//subcategory----------------------------------->>>>>
         Route::get('admin/subcategory', [App\Http\Controllers\backend\SubcategoryController::class, 'index']);
         Route::get('admin/subcategory/create', [App\Http\Controllers\backend\SubcategoryController::class, 'create']);
         Route::post('admin/subcategory/store', [App\Http\Controllers\backend\SubcategoryController::class, 'subcategoryStore']);
         Route::get('admin/subcategory/edit/{id}', [App\Http\Controllers\backend\SubcategoryController::class, 'subcategoryEdit']);
         Route::put('admin/subcategory/update', [App\Http\Controllers\backend\SubcategoryController::class, 'subcategoryUpdate']);

         Route::get('admin/subcategory/delete/{id}', [App\Http\Controllers\backend\SubcategoryController::class, 'subcategoryDelete']);

          //Manage Hr-======================================================================

         Route::get('admin/mange_employi', [App\Http\Controllers\backend\ManageHr\ManageEmployiController::class, 'mangeEmployi']);
         Route::get('admin/add-employee', [App\Http\Controllers\backend\ManageHr\ManageEmployiController::class, 'addEmployee']);
         Route::get('admin/manage-service', [App\Http\Controllers\backend\ManageHr\ManageServiceController::class, 'manageServic']);
         Route::get('admin/manage-service', [App\Http\Controllers\backend\ManageHr\ManageServiceController::class, 'manageServic']);
         Route::get('admin/add-service-provider', [App\Http\Controllers\backend\ManageHr\ManageServiceController::class, 'addServiceProvider']);
          //Expences-======================================================================

         Route::get('admin/add-expences', [App\Http\Controllers\backend\expences\AddExpencesController::class, 'addExpences']);
         Route::get('admin/today-report-expences', [App\Http\Controllers\backend\expences\AddExpencesController::class, 'todayReportExpences']);
          Route::get('admin/manage-head-expences', [App\Http\Controllers\backend\expences\AddExpencesController::class, 'addManageHeadExp']);
          Route::get('admin/add-expences-head', [App\Http\Controllers\backend\expences\AddExpencesController::class, 'addExpencesHead']);








        

//services====================================
         Route::get('admin/subcategory', [App\Http\Controllers\backend\SubcategoryController::class, 'index']);
//Booking====================================         
         Route::get('admin/booking', [App\Http\Controllers\backend\BookingController::class, 'index']);
//Reciept===========================================         
         Route::get('admin/receipt', [App\Http\Controllers\backend\ReceiptController::class, 'index']);


});


 //Customer-======================================================================

Route::Post('customer/login', [App\Http\Controllers\frontend\CustomerController::class, 'login']);
Route::Post('customer/create', [App\Http\Controllers\frontend\CustomerController::class, 'create']);

//Associate==================
Route::Post('associate/login', [App\Http\Controllers\frontend\AssociateController::class, 'login']);
Route::Post('associate/create', [App\Http\Controllers\frontend\AssociateController::class, 'create']);



