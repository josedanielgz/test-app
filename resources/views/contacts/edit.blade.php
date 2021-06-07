@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar un contacto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="primer_nombre">Primer nombre:</label>
                <input type="text" class="form-control" name="primer_nombre" value={{ $contact->primer_nombre }} />
            </div>

            <div class="form-group">
                <label for="primer_apellido">Primer apellido:</label>
                <input type="text" class="form-control" name="primer_apellido" value={{ $contact->primer_apellido }} />
            </div>

            <div class="form-group">
                <label for="correo_electronico">Correo electrónico:</label>
                <input type="text" class="form-control" name="correo_electronico" value={{ $contact->correo_electronico }} />
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" name="cargo" value={{ $contact->cargo }} />
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" value={{ $contact->telefono }} />
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" value={{ $contact->direccion }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection