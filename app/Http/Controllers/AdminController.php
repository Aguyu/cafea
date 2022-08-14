<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Http\Requests\TableRequest;
use App\Models\Employee;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\reserva;

class AdminController extends Controller
{
    public function home() {
        return view('admin.home');
    }
    //todas las mesas
    public function showTables() {
        $tables = Table::all();

        return view('admin.tables.show')
            ->with('tables', $tables);
    }
    public function toggleTables(Request $request) {
        $table = Table::findOrFail($request->table_id);

        if($table->status == 'disponible'){
            $table->status = 'ocupado';
        }
        else {
            $table->status = 'disponible';
        }

        $table->save();

        return redirect()->route('admin.showTables');
    }
    //mesas disponibles
    public function showAvailableTables() {
        $tables = Table::where('status', 'disponible')->get();

        return view('admin.tables.available')
            ->with('tables', $tables);
    }

    public function toggleAvailableTables(Request $request) {
        $table = Table::findOrFail($request->table_id);

        if($table->status == 'disponible'){
            $table->status = 'Ocupado';
        }
        else {
            $table->status = 'disponible';
        }

        $table->save();

        return redirect()->route('admin.showAvailableTables');
    }

    public function newTable() {
        return view('admin.tables.new');
    }
    public function addTable(TableRequest $request) {
        $table = new Table();
        $table->status = $request->status;
        $table->capacity = $request->capacity;
        $table->date=$request->date;
        $table->time=$request->time;
        $table->save();

        return redirect()->route('admin.showTables');
    }
    public function removeTable(Request $request) {
        $table = Table::findOrFail($request->id);

        return view('admin.tables.remove')
            ->with('table', $table);
    }
    public function deleteTable(Request $request) {
        $table = Table::findOrFail($request->table_id);
        $table->delete();

        return redirect()->route('admin.showTables');
    }
    public function showEmployees() {
        $employess = Employee::all();

        return view('admin.employees.show')
            ->with('employees', $employess);
    }
    public function searchEmployees(Request $request) {
        $searchBy = $request->searchBy;
        $word = $request->word;

        $employees = Employee::where($searchBy, 'like', '%'.$word.'%')->get();

        // dd($employees);
        return view('admin.employees.show')
            ->with('employees', $employees);
  
    }
    public function removeEmployee(Request $request) {
        $employee = Employee::findOrFail($request->id);

        return view('admin.employees.remove')
            ->with('employee', $employee);
    }
    
    public function deleteEmployee(Request $request) {
        $employee = Employee::findOrFail($request->employee_id);

        $employee->delete();

        return redirect()->route('admin.showEmployees');

    }
    public function newEmployee() {
        return view('admin.employees.new');
    }
    
    public function createEmployee(EmployeeRequest $request) {

        


        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->password = $request->password;
        $employee->address = $request->address;
        $employee->gender = $request->gender;

        $employee->save();
        return redirect()->route('admin.showEmployees');
    }
    public function showProfile(Request $request) {
        $admin = $request->session()->get('admin');

        return view('admin.profile.show')
            ->with('employee', $admin);
    }

    public function editProfile(Request $request) {
        $admin = $request->session()->get('admin');

        return view('admin.profile.edit')
            ->with('employee', $admin);
    }
    public function updateProfile(EditProfileRequest $request) {
        $admin = $request->session()->get('admin');


        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->gender = $request->gender;


        $admin->save();
        return redirect()->route('admin.showProfile');
    }
    public function editPassword(Request $request) {
        return view('admin.profile.password');
    }
    public function updatePassword(PasswordRequest $request) {
        $admin = $request->session()->get('admin');

        $oldPass = $request->oldPass;
        $newPass = $request->newPass;
        $confirmPass = $request->confirmPass;

        if($oldPass == $admin->password){
            if($newPass == $confirmPass){
                $admin->password = $confirmPass;
                $admin->save();

                $request->session()->flash('message', 'Contraseña actualizada exitosamente');
                return redirect()->route('admin.editPassword');
            }
            else {
                $request->session()->flash('message', 'tus contraseñas no coinciden!');
                return redirect()->route('admin.editPassword');
            }
        }
        else {
            $request->session()->flash('message', 'contraseña incorrecta, intenta de nuevo!');
            return redirect()->route('admin.editPassword');
        }
    }

    public function showReservations() {
        $reservaciones = reserva::all();

        return view('admin.reservations.show')
            ->with('reservaciones', $reservaciones);
    }
    public function searchReservations(Request $request) {
        $searchBy = $request->searchBy;
        $word = $request->word;

        $reservaciones = reserva::where($searchBy, 'like', '%'.$word.'%')->get();

        // dd($employees);
        return view('admin.reservations.show')
            ->with('reservaciones', $reservaciones);
  
    }
    public function removeReservation(Request $request) {
        $reservation = reserva::findOrFail($request->id);

        return view('employee.reservations.remove')
            ->with('reservation', $reservation);
    }
    public function deleteReservation(Request $request) {
        $reservation = reserva::findOrFail($request->id);
        $reservation->delete();

        return redirect()->route('admin.showReservations');
    }
 


}
