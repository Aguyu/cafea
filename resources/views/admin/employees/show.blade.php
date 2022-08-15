@extends('admin.layouts.adminlayout')

@section('title', 'Admin mostrar usuarios')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="display-4">Usuarios..</p>
            </div>
            <div class="col-md-5">
                <form method="post" class="form-inline order-form">
                    {{csrf_field()}}
                    <select class="input-group-text dropbar" id="inputGroupSelect01" name="searchBy" required>
                            <option value="name">Nombre</option>
                            <option value="email">Correo electronico</option>
                            <option value="phone">Telefono</option>
                            <option value="address">Dirección</option>
                            <option value="gender">Genero</option>
                            <option value="created_at">fecha de creación de cuenta</option>
                    </select>
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="word" required>
                    <button class="btn my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <hr>
          <div class="row">
              <div class="col-md-12">
                  <table class="table table-striped">
                        <thead>
                          <tr class="table-header table-row">
                            <th scope="col">Nombre del usuario</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Fecha de creación de cuenta</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr class="table-row">
                                    @if($employee->is_admin)
                                        <?php continue; ?>
                                    @endif
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>{{$employee->gender}}</td>
                                    <td>{{$employee->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.removeEmployee', ['id' => $employee->id])}}" type="button" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                  </table>
              </div>
          </div>
    </div>

@endsection