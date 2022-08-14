<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\ValidateEmployee;
use App\Http\Middleware\ValidateEmployeeType;
use App\Http\Controllers\signupController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\EmployeeController;
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

Route::get('/', function(){
    return view('index');
})->name('index.home');

Route::get('/IniciarSesion', [LoginController::class, 'index'])->name('login');
Route::post('/IniciarSesion', [LoginController::class, 'verify']);
Route::get('/registro',[signupController::class, 'index'])->name('registro');
Route::post('/registro',[signupController::class, 'create']);

Route::group(['middleware' => 'sess'], function(){
//rutas del usuario
Route::get('/usuario', [EmployeeController::class,'home'])->name('employee.home');

Route::get('/usuario/mesas/disponibles', [EmployeeController::Class ,'showAvailableTables'])->name('employee.showAvailableTables');
Route::post('/usuario/mesas/disponibles', [EmployeeController::class, 'bookTable']);

Route::get('/usuario/reservaciones',[EmployeeController::class, 'showReservations'])->name('employee.Reservations');

Route::get('usuario/reservaciones/{id]/cancelar', [EmployeeController::class, 'removeReservation'])->name('employee.cancelReservation');Route::post('usuario/reservaciones/{id]/cancelar', [EmployeeController::class, 'deleteReservation']);

Route::get('/usuario/perfil', [EmployeeController::class,'showProfile'])->name('employee.showProfile');

Route::get('/usuario/perfil/editar',[EmployeeController::class, 'editProfile'])->name('employee.editProfile');
Route::post('/usuario/perfil/editar',[EmployeeController::class,'updateProfile']);

Route::get('/usuario/perfil/contraseña',[EmployeeController::class,'editPassword'])->name('employee.editPassword');
Route::post('/usuario/perfil/contraseña',[EmployeeController::class, 'updatePassword']);



//rutas del admin
Route::group(['middleware' => 'admin'], function(){
Route::get('/admin', [AdminController::class, 'home'])->name('admin.home');


Route::get('/admin/mesas', [AdminController::class,'showTables'])->name('admin.showTables');
Route::post('/admin/mesas', [AdminController::class,'ToggleTables']);

Route::get('/admin/mesas/disponibles', [AdminController::class, 'showAvailableTables'])->name('admin.showAvailableTables');
Route::post('/admin/mesas/disponibles', [AdminController::class, 'toggleAvailableTables']);

Route::get('/admin/mesas/crear',[AdminController::class, 'newTable'])->name('admin.newTable');
Route::post('/admin/mesas/crear',[AdminController::class, 'addTable']);

Route::get('/admin/mesas/{id}/eliminar', [AdminController::class ,'removeTable'])->name('admin.removeTable');
Route::post('/admin/mesas/{id}/eliminar', [AdminController::class ,'deleteTable']);

Route::get('/admin/usuarios',[AdminController::class, 'showEmployees'])->name('admin.showEmployees');
Route::post('/admin/usuarios', [AdminController::class, 'searchEmployees']);

Route::get('/admin/usuarios/{id}/eliminar', [AdminController::class, 'removeEmployee'])->name('admin.removeEmployee');
Route::post('/admin/usuarios/{id}/eliminar', [AdminController::class, 'deleteEmployee']);

route::get('admin/usuarios/nuevousuario',[AdminController::class, 'newEmployee'])->name('admin.newEmployee');
route::post('admin/usuarios/nuevos usuarios',[AdminController::class, 'createEmployee']);


Route::get('/admin/perfil', [AdminController::class,'showProfile'])->name('admin.showProfile');

Route::get('/admin/perfil/editar', [AdminController::class, 'editProfile'])->name('admin.editProfile');
Route::post('/admin/perfil/editar', [AdminController::class,'updateProfile']);

Route::get('/admin/perfil/contraseña', [AdminController::class, 'editPassword'])->name('admin.editPassword');
Route::post('/admin/perfil/contraseña', [AdminController::class,'updatePassword']);

Route::get('/admin/reservaciones',[AdminController::class, 'showReservations'])->name('admin.showReservations');
Route::post('/admin/reservaciones', [AdminController::class, 'searchReservations']);

Route::get('/admin/reservaciones/{id}/eliminar',[AdminController::class, 'removeReservation'])->name('admin.removeReservation');
Route::post('/admin/reservaciones/{id}/eliminar', [AdminController::class, 'deleteReservation']);
});
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});