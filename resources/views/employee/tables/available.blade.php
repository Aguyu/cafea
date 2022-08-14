@extends('employee.layouts.employeeLayout')

@section('title', 'Admin mesas disponibles')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="display-4">
                    Lista de todas las mesas disponibles...
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                      <thead>
                        <tr class="table-header table-row">
                          <th scope="col">Estado</th>
                          <th scope="col">Capacidad</th>
                          <th scope="col">fecha</ht>
                          <th scope="col">hora</ht>
                          <th scope="col">acción</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($tables as $table)
                            <tr class="table-row">
                              <td><span class="badge badge-pill {{$table->status == 'Available' ? 'badge-success' : 'badge-danger'}}">{{$table->status}}</span></td>
                              <td scope="row">{{$table->capacity}}</td>
                              <td scope="row">{{$table->date}}</td>
                              <td scope="row">{{$table->time}}</td>
                              <td>
                                  <form method="post">
                                      {{csrf_field()}}
                                      <input type="hidden" name="table_id" value="{{$table->id}}">
                                      <button type="submit" class="btn btn-light">
                                          Reservar mesa
                                      </button>
                                  </form>
                              </td>
                            </tr>
                            @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection