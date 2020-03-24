@extends('layouts.app')

@section('title','App shop | Dashboard')
@section('body-class','profile-page')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('/img/profile_city.jpg')}}')">
  </div>
  <div class="main main-raised">
      <div class="section text-center">
        <h2 class="title" style="margin-bottom:55px">Dashboard</h2>
        <ul class="nav nav-pills nav-pills-primary" style="margin-left:10%" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" aria-expanded="false">
                    Options
                </a>
            </li>
        </ul>        
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection



