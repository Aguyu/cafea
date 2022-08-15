@extends('layouts.default')

@section('title', 'Página de inicio de sesión')

@section('login')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('main_content')

    <div class="container-fluid background">
        <p class="display-2 header">Restaurante de la abuelita</p>
        <div class="row">
            <div class="col-md-5 login-box col-sm-5">
                <p class="h3">Inicia sesión son tu correo y contraseña</p>
                <form method="post">
                  <div class="form-group">
                      {{csrf_field()}}
                    <label for="email">Correo electronico</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="correo electronico">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                  </div>
                  <button type="submit" class="btn">Iniciar sesión</button>
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
                </form>
                <div>
                    <a href="{{route('registro')}}">¿aún no tienes cuenta?</a>
                </div>
            </div>
        </div>
    </div>

@endsection
