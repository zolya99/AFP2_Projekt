@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Erősítsd meg az email címed!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Az új megerősítő linket elküldtük az email címedre!') }}
                        </div>
                    @endif

                    {{ __('Mielőtt folytatnád, nézd meg a levelezésed a hitelesítő linkért!') }}
                    {{ __('Ha nem kaptál megerősítő linket, ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kattints ide és újra küldjük!') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
