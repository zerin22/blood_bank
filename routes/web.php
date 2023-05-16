<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController as AdminAdminProfileController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Hospital\HospitalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/', function () {
//     return view('register');
// });


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']],function(){
    Route::get('dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::post('logout', [AdminController::class, 'adminDestroy'])
                ->name('admin.logout');
    Route::resource('profile', AdminAdminProfileController::class);
});

Route::group(['prefix' => 'hospital', 'middleware' => ['auth', 'hospital']],function(){
    Route::get('dashboard', [HospitalController::class, 'hospitalDashboard'])->name('hospital.dashboard');
    Route::post('logout', [HospitalController::class, 'hospitalDestroy'])
                ->name('hospital.logout');
});


Route::group( ['middleware' => ['auth', 'user']],function(){
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
