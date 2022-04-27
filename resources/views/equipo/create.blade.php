@extends('layouts.platillabase')

@section('contenido')
<h2>Crear Registros</h2>
<form action="/equipos" method="POST">

    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">apellidos</label>
    <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero</label>
    <input id="numero" name="numero" type="number" class="form-control" tabindex="3">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Referencia</label>
    <input id="referencia" name="referencia" type="text" class="form-control" tabindex="5">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text" class="form-control" tabindex="6">
  </div>

  <div class="mb-3">
    <label for="genero" class="form-label">Genero</label>
    <input list="genero-1" id="genero" name="genero" type="datalist"   class="form-control" tabindex="7">
    <datalist id="genero-1">
    <option value="Femenino" class="form-control">
    <option value="Masculino" class="form-control">
</datalist>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="8">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Fecha de Nacimiento</label>
    <input id="fecha_de_nacimiento" name="fecha_de_nacimiento" type="Date"  class="form-control datepicker" tabindex="9">
  </div>
  

  <a href="/equipos" class="btn btn-secondary" tabindex="10">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="11">Guardar</button>
</form>
@endsection