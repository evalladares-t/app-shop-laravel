@extends('layouts.app')

@section('body-class','profile-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('/img/profile_city.jpg')}}')">

  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title" style="margin-bottom:55px">Editar Producto Seleccionado</h2>
        <form method="post" action="{{url('/admin/products/'.$product->id.'/edit')}}" style="margin:10%">
          {{csrf_field()}}
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group label-floating">
                  <label class="control-label">Precio del Producto</label>
                  <input type="numer" class="form-control" name="price" value="{{$product->price}}">
              </div>
            </div>
          </div>
            <div class="form-group label-floating">
                <label class="control-label">Descripcion corta</label>
                <input type="text" class="form-control" name="description" value="{{$product->description}}">
            </div>          

            <textarea class="form-control" placeholder="Descripción larga del producto"  name="long_description" rows="5">{{$product->long_description}}</textarea>
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{url('admin/products')}}" class="btn btn-default">Regresar</a>
        </form>
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection
