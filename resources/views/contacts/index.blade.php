@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contactos</h1> 
    
    <div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

    <div>
    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">Nuevo contacto</a>
    </div>  
    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Correo electrónico</td>
          <td>Dirección</td>
          <td>Cargo</td>
          <td>Teléfono</td>
          <td colspan = 2>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->primer_nombre}} {{$contact->primer_apellido}}</td>
            <td>{{$contact->correo_electronico}}</td>
            <td>{{$contact->direccion}}</td>
            <td>{{$contact->cargo}}</td>
            <td>{{$contact->telefono}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection