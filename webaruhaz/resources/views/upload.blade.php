@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
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

