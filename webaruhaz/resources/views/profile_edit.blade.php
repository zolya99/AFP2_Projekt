@extends('layouts.app')

@section('content')
    <div style ="
             background-image: url({{url('image/bg.jpg')}});
             height: 100%;
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;">
        <div class="header" style="position: relative;text-align: center;">
            <a class="dropdown-item-text" href="{{route("shop")}}"><img src="{{url('/image/headerpurple.jpg')}}" alt="header" style="width:100%; height: 200px"/></a>
            <div class="header-text" style="color:black; text-align:center;font-family: Nunito; position:absolute; top:50%;left: 50%;transform: translate(-50%, -50%);">
                <h1>Nunito Italker</h1>
            </div>
        </div>

        <div  class="container" style="position: center; background-color: transparent">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Adatok frissítése') }}</div>

                        <div class="card-body" >
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                <div class="divTableBody" >
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Név') }}</label>
                                        <input type="text" name="name" value="{{ Auth::user()->name}}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                        <input type="email" name="email" value="{{ Auth::user()->email}}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Telefonszám') }}</label>
                                        <input type="text" name="phone_number" value="{{ Auth::user()->phone_number}}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Nem') }}</label>
                                        <input type="text" name="sex" value="{{ Auth::user()->sex}}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Születési idő') }}</label>
                                        <input type="date" name="birth" value="{{ Auth::user()->birth}}">
                                    </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" style="background-color: purple;">
                                            {{ __('Frissítés') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer" style="position: fixed;left: 0; bottom: 0; width: 100%;background-color: white; color: black;text-align: center;">
            <p>Impact 2.0 ©Copyright 2021</p>
        </div>
    </div>
@endsection
