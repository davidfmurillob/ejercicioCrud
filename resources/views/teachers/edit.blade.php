@extends('template.template')
@section('plantillaweb')
<h2>Edicion de profesor No. {{$teacher->id}}</h2>
<form action="{{route('profesores.update', $teacher)}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    @method('PUT')
    {{ csrf_field() }}
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombres: </label>
            <input type="text" name="nombres" values="{{$teacher->nombres}}">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Apellidos: </label>
            <input type="text" name="apellidos" values="{{$teacher->apellidos}}">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Direccion: </label>
            <input type="text" name="direccion" values="{{$teacher->direccion}}">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Correo: </label>
            <input type="email" name="correo" values="{{$teacher->correo}}">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Celular: </label>
            <input type="float" name="celular" values="{{$teacher->celular}}">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
           <label for="">Nivel acacdemico: </label>
            <input   type="float" desabled="desabled" name="nivel_academico" values="{{$teacher->nivel_academico}}">
            <br>
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
