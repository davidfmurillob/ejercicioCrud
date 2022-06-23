@extends('template.template')
@section('plantillaweb')
<h2>Listado de Ambientes</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">1</th>
        <th scope="col">2</th>
        <th scope="col">3</th>
        <th scope="col">4</th>
        <th scope="col">5</th>
    
      </tr>
    </thead>
    <tbody>
        @foreach ($ambients as $ambient)
        <tr>
            <th scope="row">{{$ambient->id}}</th>
            <td>{{$ambient->aula_lunes}}</td>
            <td>{{$ambient->aula_martes}}</td>
            <td>{{$ambient->aula_miercoles}}</td>
            <td>{{$ambient->aula_jueves}}</td>
            <td>{{$ambient->aula_viernes}}</td>
            
            <td>
              <a href="{{route('ambientes.edit', $ambient->id)}}" class="btn btn-warning btn-sm" role="button" aria-disabled="true">Editar</a>
            </td>
            <td>
              <form action="{{route('ambientes.destroy', $ambient->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>  
              </form>
            </td>  
            </td>
        </tr>      
        @endforeach
    </tbody>
  </table>
  {{$ambients->links()}}
@endsection 