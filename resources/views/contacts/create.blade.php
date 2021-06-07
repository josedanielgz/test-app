@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Añadir un contacto</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">
              <label for="primer_nombre">Nombre:</label>
              <input type="text" class="form-control" name="primer_nombre"/>
          </div>

          <div class="form-group">
              <label for="primer_apellido">Apellido:</label>
              <input type="text" class="form-control" name="primer_apellido"/>
          </div>

          <div class="form-group">
              <label for="correo_electronico">Correo electrónico:</label>
              <input type="text" class="form-control" name="correo_electronico"/>
          </div>

          <div class="form-group">
              <label for="cargo">Cargo:</label>
              <input type="text" class="form-control" name="cargo"/>
          </div>

          <div class="form-group">
              <label for="telefono">Teléfono:</label>
              <input type="text" class="form-control" name="telefono"/>
          </div>

          <div class="form-group">
              <label for="direccion">Dirección:</label>
              <input type="text" class="form-control" name="direccion"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection
