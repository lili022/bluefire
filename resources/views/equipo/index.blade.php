@extends('layouts.platillabase')

@section('contenido')

<a href="equipos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4"> 
<thead> 
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">apellidos</th>
        <th scope="col">Numero</th>
        <th scope="col">Telefono</th>
        <th scope="col">Referencia</th>
        <th scope="col">Correo</th>
        <th scope="col">Genero</th>
        <th scope="col">Tipo</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($equipos as $equipo)
    <tr>
         <td>{{ $equipo->id}} </td>
         <td>{{ $equipo->Nombre}} </td>
         <td>{{ $equipo->Apellido}} </td>
         <td>{{ $equipo->Numero}} </td>
         <td>{{ $equipo->Telefono}} </td>
         <td>{{ $equipo->Referencia}} </td>
         <td>{{ $equipo->Correo}} </td>
         <td>{{ $equipo->Genero}} </td>
         <td>{{ $equipo->Tipo}} </td>
         <td>{{ $equipo->Fecha_de_Nacimiento}} </td>
    
        <td>
             <a href="/equipos/{{ $equipo->id}}/edit" class="btn btn-info">Editar</a>
             <button class="btn btn-danger">Borrar</button>
         </td>
             </tr>
    @endforeach
</tbody>
</table>
@endsection