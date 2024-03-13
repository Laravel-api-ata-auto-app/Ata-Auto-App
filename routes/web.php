<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\userDashboardController;
use App\Http\Controllers\shop\shopdashboardcontroller;
use App\Http\Controllers\Admin\DashboardContoller;
use App\Http\Controllers\trainer\DashboardController;
use App\Http\Controllers\Admin\BrandContoller;
use App\Http\Controllers\admin\plansController;
use App\Http\Controllers\admin\CarModelsController;
use App\Http\Controllers\admin\MaintainDocsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DtcController;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\shop\profilecontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/admin/registr', function(){
    return view('admin.register');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/payment', function(){
    return view('paymethod');
});




Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
         Route::get('dashboard',[App\Http\Controllers\Admin\DashboardContoller::class, 'index']);
    //Brand Route
        Route::resource('brand',App\Http\Controllers\Admin\BrandContoller::class);
    // Categories
    Route::resource('category',App\Http\Controllers\Admin\categoryController::class);
    //Plans Route
        Route::resource('plans',App\Http\Controllers\Admin\plansController::class);
    //Car Model
        Route::resource('Carmodel',App\Http\Controllers\Admin\CarModelsController::class);
    //DTC
        Route::resource('DTC',App\Http\Controllers\Admin\DtcsController::class);
    //import Excel
    Route::get('/excelimport',function(){return view('admin.DTC.excelimport');});
    Route::get('import', [App\Http\Controllers\Admin\importexcel::class,'index']);
    Route::post('import', [App\Http\Controllers\Admin\importexcel::class,'import']);    
        //Subscription
    Route::get('/Subscriptions', function(){
        return view('admin.subscription.index');
        });
    //Documentations
    Route::resource('/Docs',App\Http\Controllers\Admin\MaintainDocsController::class);
    Route::get('/Docs/{brand}/{model}/edit', [App\Http\Controllers\Admin\MaintainDocsController::class, 'edit'])->name('docs.edit');
    Route::post('/Docs/upload/{brandsName}/{modelName}/',[App\Http\Controllers\Admin\Docs\DocsUploadController::class,'upload'])->name('upload');    
 });


     Route::prefix('user')->middleware(['auth','user'])->group(function(){
        Route::get('dashboard',[App\Http\Controllers\User\userDashboardController::class, 'index']);
        //Get DTC
        Route::get('/getdtc',[App\Http\Controllers\User\getDtcsController::class,'index']);
        Route::get('/getdtc/search',[App\Http\Controllers\User\getDtcsController::class,'Search']);
    });

    Route::prefix('shop')->middleware(['auth','shop'])->group(function(){
        Route::get('dashboard',[App\Http\Controllers\shop\shopdashboardcontroller::class, 'index']);
        Route::resource('Profile',App\Http\Controllers\shop\profilecontroller::class);
        Route::resource('Products',App\Http\Controllers\shop\SellProductsController::class);
    });


    Route::prefix('garage')->middleware(['auth','garage'])->group(function(){
        Route::get('dashboard',[App\Http\Controllers\garage\garageDashboardController::class, 'index']);
    });



Route::prefix('trainer')->middleware(['auth','trainer'])->group(function(){
    Route::get('dashboard',[App\Http\Controllers\trainer\DashboardController::class, 'index']);

});

//=============testing view ============
Route::get('/adminsidebar',function(){
    return view('layouts.inc.admin.sidebar');
});
Route::get('/adminnavbar',function(){
    return view('layouts.inc.admin.navbar');
});
Route::get('/adminview',function(){
    return view('layouts.admin');
});
Route::get('/profile',function(){
    return view('frontend.pages.profile');
});
//==================28/7/2023====================

// Route::get('/admin/brand',function(){
//     return view('admin/brand');
// });
//Route::get('/shop/Profile/{{Auth::user()->id}}/edit',[App\Http\Controllers\shop\profilecontroller::class,'edit']);