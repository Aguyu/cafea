<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\reserva;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\PasswordRequest;
class EmployeeController extends Controller
{
    public function home() {
        return view('employee.home');
    }
    public function showAvailableTables() {
        $tables = Table::where('status', 'disponible')->get();

        return view('employee.tables.available')
            ->with('tables', $tables);
    }
    public function bookTable(Request $request){
    
      $table=Table::findOrFail($request->table_id);
      $employee = $request->session()->get('employee');
      $reserva=new reserva();
      $reserva->table_id=$table->id;
      $reserva->employee_id=$employee->id;
      $reserva->name=$employee->name;
      $reserva->date=$table->date;
      $reserva->time=$table->time;

    if($table->status == 'disponible'){
        $table->status = 'ocupado';
    }
    else {
        $table->status = 'disponible';
    }

      $table->save();
      $reserva->save();

    return redirect()->route('employee.showAvailableTables');
    }
    public function showReservations(Request $request){
      $employee=$request->session()->get('employee');
      $reservations=reserva::where('employee_id', $employee->id)->get();
      return view('employee.reservations.show')->with('reservations', $reservations);
    }

    public function removeReservation(Request $request) {
        $reservation = reserva::findOrFail($request->id);

        return view('employee.reservations.remove')
            ->with('reservation', $reservation);
    }
    public function deleteReservation(Request $request) {
        $reservation = reserva::findOrFail($request->id);
        $table=Table::where('id', $reservation->table_id);
     
        $reservation->delete();
    
        
        return redirect()->route('employee.Reservations');
    }
    public function showProfile(Request $request) {
        $employee = $request->session()->get('employee');

        return view('employee.profile.show')
            ->with('employee', $employee);
    }
    public function editProfile(Request $request) {
        $employee = $request->session()->get('employee');

        return view('employee.profile.edit')
            ->with('employee', $employee);
    }
    public function updateProfile(EditProfileRequest $request) {
        $employee = $request->session()->get('employee');

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->gender = $request->gender;


        $employee->save();
        return redirect()->route('employee.showProfile');
    }
    public function editPassword(Request $request) {
        return view('employee.profile.password');
    }
    public function updatePassword(PasswordRequest $request) {
        $employee = $request->session()->get('employee');

        $oldPass = $request->oldPass;
        $newPass = $request->newPass;
        $confirmPass = $request->confirmPass;

        if($oldPass == $employee->password){
            if($newPass == $confirmPass){
                $employee->password = $confirmPass;
                $employee->save();

                $request->session()->flash('message', 'Contraseña actualizada exitosamente');
                return redirect()->route('employee.editPassword');
            }
            else {
                $request->session()->flash('message', 'tus contraseñas no coinciden!');
                return redirect()->route('employee.editPassword');
            }
        }
        else {
            $request->session()->flash('message', 'contraseña incorrecta, intenta de nuevo!');
            return redirect()->route('employee.editPassword');
        }
    }

}
