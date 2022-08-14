@extends('admin.layouts.adminLayout')

@section('title', 'Admin cambiar contraseña')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">cambiar contraseña</p>
        <hr>
        <form method="post" >
            <div class="row">
                <div class="col-md-10 new-item">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Contraseña actual</label>
                          <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tu contraseña actual" name="oldPass" value="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Contraseña nueva</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese una nueva contraseña" name="newPass" value="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Confirmar Contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme su contraseña" name="confirmPass" value="">
                        </div>
                      <button type="submit" class="btn">Cambiar contraseña</button>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                          <li>{{$err}}</li>
                        @endforeach
                    </ul>
                    @endif
                    @if(session('message'))
  		                {{session('message')}}
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
