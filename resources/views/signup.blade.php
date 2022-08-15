@extends('layouts.default')

@section('title', 'Página de registro')

@section('login')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('main_content')
<footer>

<div class="container-fluid  mx-auto">
    <div class="row d-flex justify-content-center background">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center ">
        <p class="display-4 header">Restaurante de la abuelita</p>
            <div class="card login-box">
            <p class="h3">Registrate</p>
                <form class="form-card bg-secondary " method="post" >
                {{csrf_field()}}
                    <div class="row justify-content-between text-left ">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control"  placeholder="Nombre"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"><label for="email">Correo electronico</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="correo electronico"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label for="phone">telefono</label>
                    <input type="tel" name="phone" class="form-control"  placeholder="Telefono"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"><label for="phone">Dirección</label>
                    <input type="tel" name="address" class="form-control"  placeholder="dirección"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                       
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"><label for="exampleFormControlSelect1">Genero</label>
                    <select class="form-control col-md-6" id="exampleFormControlSelect1" name="gender">
                        <option selected>Eliga uno</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select></div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6">
                         <button type="submit" class="btn">Registrar</button> </div>
                    </div>
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
            </div>
        </div>
    </div>
</div>

@endsection

</footer>
