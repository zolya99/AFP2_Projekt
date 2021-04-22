@extends('layouts.app')
@section('content')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <div class ="bg"
         style ="
             background-image: url({{url('image/bg.jpg')}});
             height: 100%;
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;">

        <div class="header" style="position: relative;text-align: center;color: white;">
            <a class="dropdown-item-text" href="{{route("shop")}}"><img src="{{url('/image/headerpurple.jpg')}}" alt="header" style="width:100%; height: 200px"/></a>
            <div class="header-text" style="color:black; text-align:center;font-family: Nunito; position:absolute; top:50%;left: 50%;transform: translate(-50%, -50%);">
                <h1>Nunito Italker</h1>
            </div>
        </div>
    <div class="container" style="text-align:center;position: center;">
        <div class="jumbotron" style="background-color: transparent;">
            <h2> <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }}</h2>
            <div class="table responsive" style=" background-color: transparent; ">
                <img src="http://placehold.it/300x300" alt="profilkep"   style="text-align:center;position: center; border-radius:5%; " />
            </div>
            <p style="text-align:center;">
                <i class="glyphicon glyphicon-map-marker"></i> {{ Auth::user()->address }}
                <br/>
                <i class="glyphicon glyphicon-envelope"></i> {{ Auth::user()->email }}
                <br />
                <i class="glyphicon glyphicon-phone"></i> {{ Auth::user()->phone_number }}
                <br />
                <i class="glyphicon glyphicon-gift"></i> {{ Auth::user()->birth }}
            </p>
            <div class="btn">
                <a href="{{ route('home') }}" class="btn btn-warning"style="background-color: purple;border-color: #6574cd;">Megrendelések
                </a>
            </div>
            <br />
            <div class="btn-group">
                <a href="{{ route('profile_edit') }}" class="btn btn-warning" style="background-color: purple; border-color: #6574cd;">
                    Profil szerkesztése</a>
            </div>
        </div>
    </div>
        <div class="footer" style="position: fixed;left: 0; bottom: 0; width: 100%;background-color: white; color: black;text-align: center;">
            <p>Impact 2.0 ©Copyright 2021</p>
        </div>
    </div>
@endsection
