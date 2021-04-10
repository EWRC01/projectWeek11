

@extends('layouts.app')
<div class="container">
<div class="card text-white bg-dark mb-3">
<center>
<div class="card-header"><h2>Tabla de articulos registrados</h2></div>

<div class="card-body">
<h3>¿No has registrado un articulo?</h3>


</div>
<div class="card-footer">
<h4><a class="btn btn-light" href="{{ url('article/create') }}">Agregar un nuevo articulo</a></h4>
</div>

</div>
</center>
<table class="table table-dark">
<thead>
<th>ID</th>
<th>Nombre</th>
<th>Descripción</th>
<th>Precio</th>
<th>Cantidad</th>
<th>Acciones</th>
<th>Acciones</th>
</thead>
<tbody>
@foreach($articles as $article)
<tr>

        <td>{{$article->id}}</td>
        <td>{{$article->name}}</td>
        <td>{{$article->description}}</td>
        <td>{{$article->price}}</td>
        <td>{{$article->quantity}}</td>


            
        <td><a class="btn btn-info text-white" href="{{ url('/article/'.$article->id. '/edit') }}">Editar</a></td>

        <!--Formulario para eliminar el registro-->

        <form action="{{ url('/article/' .$article->id) }}" method="post">
        @csrf

        {{ method_field('DELETE') }}
        <td><input class="btn btn-danger" type="submit" onclick="return confirm('Desea eliminar el registro?')" value="Eliminar"></td>
        
        </form>



</tr>

@endforeach

</tbody>
</table>
</div>