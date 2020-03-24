@extends('layouts.app')

@section('title','Imágenes de los Productos')
@section('body-class','profile-page')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('/img/profile_city.jpg')}}')">
  </div>
  <div class="main main-raised">
      <div class="section text-center">
        <h2 class="title" style="margin-bottom:55px">Imágenes del Producto "{{$product->name}}"</h2>
        <form method="post" action="" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="file" name="photo" required>
          <button type="submit" class="btn btn-primary btn-round">Subir nueva imagen</button>
          <a href="{{url('/admin/products')}}"  class="btn btn-default btn-round">Regresar</a>
        </form> 
        <hr style="width: 90%;">
        <div class="row">
        @foreach($images as $image )
          <div class="col-md-4">
            <div class="card" style="width: 12rem; margin-left:22%">
              <img src="{{ $image->url}}" style="width:192px; height:192px "class="card-img-top" >
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-danger" style="padding:7.5px 16px" >Elimminar imagen</a>
              </div>          
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection
