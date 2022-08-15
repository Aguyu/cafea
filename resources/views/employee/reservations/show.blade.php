@extends('employee.layouts.employeeLayout')

@section('title', 'Usuario Reservaciones')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="display-4">
                    Reservaciones...
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                      <thead>
                        <tr class="table-header table-row">
                          <th scope="col">Nombre</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Hora</ht>
                          <th scope="col">acción</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($reservations as $reservation)
                            <tr class="table-row">
                              <td>{{$reservation->name}}</span></td>
                              <td scope="row">{{$reservation->date}}</td>
                              <td scope="row">{{$reservation->time}}</td>
                              <td>
                                      <a href="{{route('employee.cancelReservation', ['id' => $reservation->id])}}" type="button" class="btn btn-danger">Cancelar</a>
                              </td>
                            </tr>
                            @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection