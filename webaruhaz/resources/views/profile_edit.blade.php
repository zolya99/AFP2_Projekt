@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Adatok frissítése') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf

                            <div class="divTableBody">
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
                                    <button type="submit" class="btn btn-primary">
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
@endsection
