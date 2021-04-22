@extends('layouts.app')
@section('content')
    <div class ="bg"
         style ="
             background-image: url({{url('image/bg.jpg')}});
             height: 100%;
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;">

        <div class="header" style="position: relative;text-align: center;color: white;">
            <a class="dropdown-item-text" href="{{route("shop")}}"><img src="{{url('/image/headerpurple.jpg')}}" alt="header" style="width:100%; height: 200px"/></a>
            <div class="header-text" style="color:black; text-align:center; font-family: Nunito; position:absolute; top:50%;left: 50%;transform: translate(-50%, -50%);">
                <h1>Nunito Italker</h1>
            </div>
        </div>
        <div class="container" style="text-align:center; position: center; font-family: Nunito">
            <div class="jumbotron" style="background-color: transparent;">
                <h2><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> {{ Auth::user()->name }}</h2>
                <div class="table responsive" style=" background-color: transparent; ">
                    <img src="http://placehold.it/300x300" alt="profilkep"   style="text-align:center;position: center; border-radius:5%; " />
                </div>
                <p style="text-align:center;">
                    {{ Auth::user()->address }}
                    <br/>
                    {{ Auth::user()->email }}
                    <br />
                    {{ Auth::user()->phone_number }}
                    <br />
                    {{ Auth::user()->birth }}
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
