@extends('layouts.app')


<div class="card bg-dark text-white">

<div class="card-title">
<h3><center>Edita el articulo registrado</center></h3>
</div>
<div class="card-body">
<label for="name" class="form-label">Nombre</label>
<input class="form-control" type="text" name="name" id="name" value="{{  isset($article->name)?$article->name:'' }}"><br/>

<label for="description" class="form-label">Descripción</label>
<input class="form-control" type="text" name="description" id="description" value="{{  isset($article->description)?$article->description:'' }}"><br/>

<label for="name" class="form-label">Precio</label>
<input class="form-control" type="number" step="any" name="price" id="price" value="{{  isset($article->price)?$article->price:'' }}"><br/>

<label for="name" class="form-label">Cantidad</label>
<input class="form-control" type="number" name="quantity" id="quantity" value="{{  isset($article->quantity)?$article->quantity:'' }}"><br/>
<center>
<button class="btn btn-danger" type="submit">Guardar</button>
<a class="btn btn-light" href="{{  url('article') }}">Regresar</a>
</center>
</div>
<div class="card-footer">

</div>



</div>