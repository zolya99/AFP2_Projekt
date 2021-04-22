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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"style="background-color:transparent;">
                    <div class="card-header">{{ __('Adatok frissítése') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('drink.store') }}">
                            @csrf

                                <div class="divTableBody">
                                    <div class="divTableRow">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Név') }}</label>
                                        <input type="text" name="name" value="{{ ''}}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Ár') }}</label>
                                        <input type="text" name="price" value="{{ ''}}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Kategória') }}</label>
                                        <input type="text" name="type" value="{{ ''}}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Leírás') }}</label>
                                        <input type="text" name="description" value="{{ ''}}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Készleten') }}</label>
                                        <input type="text" name="onStock" value="{{'' }}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Származási hely') }}</label>
                                        <input type="text" name="placeOfOrigin" value="{{'' }}">
                                    </div>
                                    <div class="divTableRow">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Kép') }}</label>
                                        <input type="file" name="picture" value="{{'' }}">
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary" style="background-color: purple">
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

