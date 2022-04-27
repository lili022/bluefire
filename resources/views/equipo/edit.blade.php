@extends('layouts.platillabase')
@section('contenido')

<h2>Editar registros</h2>

<form action="/equipos/{{$equipo->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input id="nombre" name="nombre" type="text" class="form-control" value="{{$equipo->nombre}}">    
  </div>
  <div class="mb-3">
  <label for="" class="form-label">apellido</label>
  <input id="apellido" name="apellido" type="text" class="form-control" value="{{$equipo->apellido}}">
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Numero</label>
  <input id="numero" name="numero" type="number" class="form-control" value="{{$equipo->numero}}">
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input id="telefono" name="telefono" type="number" class="form-control" value="{{$equipo->telefono}}">
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Referencia</label>
  <input id="referencia" name="referencia" type="text" class="form-control" value="{{$equipo->referencia}}">
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Correo</label>
  <input id="correo" name="correo" type="text" class="form-control" value="{{$equipo->correo}}">
  </div>

  <div class="mb-3">
  <label for="genero" class="form-label">Genero</label>
  <input list="genero-1" id="genero" name="genero" type="datalist" class="form-control" value="{{$equipo->genero}}">
  <datalist id="genero-1">
    <option value="Femenino" class="form-control">
    <option value="Masculino" class="form-control">
</datalist>
</div>
  <div class="mb-3">
  <label for="" class="form-label">Tipo</label>
  <input id="tipo" name="tipo" type="text" class="form-control" value="{{$equipo->tipo}}">
  </div>

  <div class="mb-3">
  <label for="" class="form-label">Fecha de Nacimiento</label>
  <input id="fecha_de_nacimiento" name="fecha_de_nacimiento" type="Date" class="form-control datepicker" value="{{$equipo->fecha_de_nacimiento}}">
  </div>

  <a href="/equipos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

