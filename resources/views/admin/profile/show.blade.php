@extends('admin.layouts.adminLayout')

@section('title', 'Admin Perfil')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Tu perfil</p>
        <hr>
        <!-- <form method="post" enctype="multipart/form-data"> -->
            <div class="row">
                <div class="col-md-8">
                        {{csrf_field()}}
                        <input type="hidden" name="employee_id" value="{{$employee->id}}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Employee Name" name="name" value="{{$employee->name}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Correo electronico</label>
                          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Employee Email" name="email" value="{{$employee->email}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Telefono</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Phone" name="phone" value="{{$employee->phone}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Dirección</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Address" name="address" value="{{$employee->address}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Genero</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Gender" name="address" value="{{$employee->gender}}" readonly>
                        </div>
                      <a href="{{route('admin.editProfile')}}" type="button" class="btn">Editar perfil</a>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                          <li>{{$err}}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        <!-- </form> -->
    </div>
@endsection
