@extends('employee.layouts.employeeLayout')

@section('title', 'usuario Editar perfil')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Edit your info</p>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                        {{csrf_field()}}
                        <input type="hidden" name="employee_id" value="{{$employee->id}}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Employee Name" name="name" value="{{$employee->name}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Correo electrónico</label>
                          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Employee Email" name="email" value="{{$employee->email}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Telefono</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Phone" name="phone" value="{{$employee->phone}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Dirección</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Address" name="address" value="{{$employee->address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Genero</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                <option value="Hombre" {{$employee->gender == 'Male' ? 'selected' : ''}}>Hombre</option>
                                <option value="Mujer" {{$employee->gender == 'Female' ? 'selected' : ''}}>Mujee</option>
                            </select>
                        </div>
                      <button type="submit" class="btn">actualizar Profile</button>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                          <li>{{$err}}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

            </div>
        </form>
    </div>
@endsection
