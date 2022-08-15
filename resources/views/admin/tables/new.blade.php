@extends('admin.layouts.adminlayout')

@section('title', 'Admin Agregar mesa')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Ingrese información para crear una nueva tabla</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" >
                      {{csrf_field()}}
                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Estado</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="status">
                              <option value="disponible">disponible</option>
                              <option value="ocupado">Ocupado</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCapacity">Capacidad</label>
                        <input type="number" class="form-control" id="exampleInputCapacity" placeholder="Capacidad de la mesa" name="capacity">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputDate">fecha</label>
                        <input type="date" class="form-control" id="exampleInputDate" placeholder="fecha" name="date">
                      </div>
                      <div class="form-group">
                      <select value="time" name="time" id="time">
                                    <option selected>Eliga la hora</option>
                                    <option value="12pm-1am">12pm-1am</option>
                                    <option value="1am-2am" >1am-2am</option>
                                    <option value="2am-3am" >2am-3am</option>
                                    <option name="3am-4am" >3am-4am</option>
                                    <option name="4am-5am" >4am-5am</option>
                                    <option name="5am-6am" >5am-6am</option>
                                    <option name="6am-7am" >6am-7am</option>
                                    <option name="7am-8am" >7am-8am</option>
                                    <option name="8am-9am" >8am-9am</option>
                                    <option value="9am-10am" >9am-10am</option>
                                    <option value="10am-11am" >10am-11am</option>
                                    <option name="11am-12pm" >11am-12pm</option>
                                    <option name="12pm-1pm" >12pm-1pm</option>
                                    <option name="1pm-2pm" >1pm-2pm</option>
                                    <option name="2pm-3pm" >2pm-3pm</option>
                                    <option name="3pm-4pm" >3pm-4pm</option>
                                    <option name="4pm-5pm" >4pm-5pm</option>
                                    <option name="5pm-6pm" >5pm-6pm</option>
                                    <option name="6pm-7pm" >6pm-7pm</option>
                                    <option name="7pm-8pm" >7pm8pm</option>
                                    <option name="8pm-9pm" >8pm-9pm</option>
                                    <option name="9pm-10pm" >9pm-10pm</option>
                                    <option name="10pm-11pm" >10pm-11pm</option>
                                    <option name="11pm-12pm" >11pm-12pm</option>
                         </select>
                      </div>
                      <button type="submit" class="btn">Añadir mesa</button>
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
