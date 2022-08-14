@extends('admin.layouts.adminLayout')

@section('title', 'Admin mesas ocupadas')

@extends('admin.layouts.adminLayout')

@section('title', 'Admin mesas disponibles')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="display-4">
                    Lista de todas las mesas ocupadas...
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                      <thead>
                        <tr class="table-header table-row">
                          <th scope="col">ID</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Capacidad</th>
                          <th scope="col">fecha</ht>
                          <th scope="col">hora</ht>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($tables as $table)
                            <tr class="table-row">
                              <th scope="row">{{$table->id}}</th>
                              <td><span class="badge badge-pill {{$table->status == 'Available' ? 'badge-success' : 'badge-danger'}}">{{$table->status}}</span></td>
                              <td scope="row">{{$table->capacity}}</td>
                              <td scope="row">{{$table->date}}</td>
                              <td scope="row">{{$table->time}}</td>

                            </tr>
                            @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection