@extends('layouts.default')

@section('title', 'registro')

@section('login')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('main_content')
<section id="section">
<div class="container-fluid background">
        <p class="display-2 header">Restaurante de la abuelita</p>
        <div class="row">
            <div class="col-md-12 login-box col-sm-5">
                <p class="h3">Registrate</p>
                <form method="post"  >
                  <div class="form-group">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control"  placeholder="Nombre">
                      </div>
                    <label for="email">Correo electronico</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="correo electronico">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <label for="phone">telefono</label>
                    <input type="tel" name="phone" class="form-control"  placeholder="Telefono">
                  </div>
                  <div class="form-group">
                    <label for="phone">Dirección</label>
                    <input type="tel" name="address" class="form-control"  placeholder="dirección">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Genero</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="gender">
                        <option selected>Eliga uno</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                 </div>
                  <button type="submit" class="btn">Registrar</button>

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
</divs>

@endsection


</section>
    