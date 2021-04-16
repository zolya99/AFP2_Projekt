@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rendszerüzenet') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Sikeres bejelentkezés!') }}
                </div>
            </div>
            <div class="item">
                <img src="{{url('/image/kepudv.jpg')}}" alt="udvozoljuk" style="width:100%;"/>
                <div class="carousel-caption">
                    <h4>Lépjen tovább az üzlet menüpont alatt</h4>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
