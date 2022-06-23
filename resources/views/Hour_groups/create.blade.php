@extends('template.template')
@section('plantillaweb')
<h2>Registro de las horas de los grupos</h2>
<form action="{{route('hora_grupos.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora lunes: </label>
            <input type="text" name="hora_lunes">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora martes: </label>
            <input type="text" name="hora_martes">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora miercoles: </label>
            <input type="text" name="hora_miercoles">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora jueves: </label>
            <input type="text" name="hora_jueves">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora viernes: </label>
            <input type="text" name="hora_viernes">
          </div>

          
            
            <br>
              <input type="submit" value="Enviar">
          </div>


        </form>

@endsection