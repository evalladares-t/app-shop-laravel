@extends('layouts.app')

@section('title','Listado de Productos')
@section('body-class','profile-page')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('/img/profile_city.jpg')}}')">
  </div>
  <div class="main main-raised">
      <div class="section text-center">
        <h2 class="title" style="margin-bottom:55px">Lista de productos</h2>
        <div class="team">
          <div class="row">
          <table class="table" style="margin-left:60px; margin-right:60px">
          <a href="{{url('/admin/products/create')}}"  class="btn btn-primary btn-round" style="margin-left:45%">Agregar</a>
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th class="text-left" style="width:15%">Nombre</th>
                      <th class="text-left" style="width:33%">Descripción</th>
                      <th>Categoría</th>
                      <th class="text-right">Precio</th>
                      <th class="text-right">Opciones</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($products as $product)
                  <tr>
                      <td class="text-center">{{$product->id}}</td>
                      <td class="text-left">{{$product->name}}</td>
                      <td class="text-left">{{$product->description}}</td>
                      <td>{{$product->category ? $product->category->name: 'General'}}</td>
                      <td class="text-right">&euro; {{$product->price}}</td>
                      <td class="td-actions text-right">
                          <form method="post" action="{{url('/admin/products/'.$product->id.'/delete')}}">
                          {{csrf_field()}}
                            <a href="#" rel="tooltip" style="padding:7.5px 16px"title="View Profile" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-info"></i>
                            </a>
                            <a href="{{url('/admin/products/'.$product->id.'/edit')}}" style="padding:7.5px 16px" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>  
                            <a href="{{url('/admin/products/'.$product->id.'/images')}}" style="padding:7.5px 16px" rel="tooltip" title="Gestionar Imágenes" class="btn btn-warning btn-simple btn-xs">
                                <i class="fa fa-image"></i>
                            </a>                          
                            <button type="submit" rel="tooltip" style="padding:7.5px 16px" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
            <div style="margin-left:34%">
              {{$products->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection
