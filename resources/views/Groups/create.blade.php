@extends('template.template')
@section('plantillaweb')
<h2>Registro de Grupos</h2>
<form action="{{route('grupos.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Año: </label>
            <input type="year" name="anio">
          </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Periodo académico: </label>
            <input type="text" name="periodo">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nivel academico: </label>
            <select class="form-select" name="teacher_id">
                <option selected ="true" disabled="disabled" >Profesores</option>
                @foreach ($teachers as $teacher)
                <option value="{{$teacher->id}}" > {{$teacher->nombres}} {{$teacher->apellidos}}</option>  
                @endforeach
               
              </select>

              <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Tema: </label>
                <select class="form-select" name="subject_id">
                    <option selected ="true" disabled="disabled" >Materias | creditos</option>
                    @foreach ($subjects as $sub)
                    <option value="{{$sub->id}}" > {{$sub->nombre}} {{$sub->creditos}}</option>  
                    @endforeach
                   
                  </select>
            
<br>
              <input type="submit" value="Enviar">
          </div>


        </form>

@endsection
