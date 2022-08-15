@extends('admin.layouts.adminlayout')

@section('title', 'Admin eliminar reservación')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
                <p class="display-4" style="text-align:center;">¿Eliminar reservación?</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" >
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$reservation->id}}" readonly>
                  <div class="form-group">
                    <label for="exampleInputEmail1">nombre del cliente</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estado" name="status" value="{{$reservation->name}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hora</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Category Description" name="capacity" value="{{$reservation->time}}" readonly>
                  </div>
                  <button type="submit" class="btn">Eliminar reservación </button>
                </form>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $err)
                      <li>{{$err}}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
@endsection