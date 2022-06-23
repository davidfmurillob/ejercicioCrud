@extends('template.template')
@section('plantillaweb')
<h2>Registro de Ambientes</h2>
<form action="{{route('ambientes.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Aula lunes: </label>
            <input type="text" name="lunes">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Aula martes: </label>
            <input type="text" name="martes">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Aula miercoles: </label>
            <input type="text" name="miercoles">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Aula jueves: </label>
            <input type="text" name="jueves">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Aula viernes: </label>
            <input type="text" name="viernes">
          </div>

          
            
            <br>
              <input type="submit" value="Enviar">
          </div>


        </form>

@endsection