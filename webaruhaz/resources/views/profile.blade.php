@extends('layouts.app')
@section('content')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <div class="container">
        <div class="jumbotron" style="background:#F5F5F5">
            <h2> <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }}</h2>
            <div class="table responsive">
                <img src="http://placehold.it/300x300" alt="" class="img-rounded img-responsive" />
            </div>
            <p>
                <i class="glyphicon glyphicon-map-marker"></i> {{ Auth::user()->address }}
                <br/>
                <i class="glyphicon glyphicon-envelope"></i> {{ Auth::user()->email }}
                <br />
                <i class="glyphicon glyphicon-phone"></i> {{ Auth::user()->phone_number }}
                <br />
                <i class="glyphicon glyphicon-gift"></i> {{ Auth::user()->birth }}
            </p>
            <div class="btn">
                <a href="{{ route('home') }}" class="btn btn-warning">Megrendelések
                </a>
            </div>
            <br />
            <div class="btn-group">
                <a href="{{ route('profile_edit') }}" class="btn btn-warning">
                    Profil szerkesztése</a>
            </div>
        </div>
    </div>
@endsection
