@extends('template.template')
@section('plantillaweb')
<h2>Registro de profesores</h2>
<form action="{{route('profesores.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombres: </label>
            <input type="text" name="nombres">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Apellidos: </label>
            <input type="text" name="apellidos">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Direccion: </label>
            <input type="text" name="direccion">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Correo: </label>
            <input type="email" name="correo">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Celular: </label>
            <input type="float" name="celular">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nivel academico: </label>
            <select class="form-select" name="nivel_academico">
                <option selected>Nivel academico</option>
                <option value="1">Bachiller academicoy/o comercial</option>
                <option value="2">Tecnico</option>
                <option value="3">Tecnólogico</option>
                <option value="4">Profesional</option>
                <option value="5">Magister</option>
                <option value="6">Doctorado</option>
              </select>
<br>
              <input type="submit" value="Enviar">
          </div>


        </form>

@endsection
