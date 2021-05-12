<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Cart</title>
    <meta charset="utf-8">
</head>
</html>
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
            <div class="header-text" style="color:black; text-align:center;font-family: Nunito; position:absolute; top:50%;left: 50%;transform: translate(-50%, -50%);">
                <h1>Nunito Italker</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <form id="post_form" action="{{ route('orders.place') }}" method="get">
                @csrf
                <input type="hidden" name="status" value="place" />
                <input type="hidden" name="orders" value="{{ $order_id }}" />
            </form>
            <table class="table table-borderless text-md-center col-8 table-responsive">
                <thead>
                <tr class="border-top">
                    <th scope="col">Ital</th>
                    <th scope="col">Megrendelés kódja</th>
                    <th scope="col">Ár</th>
                    <th scope="col">Mennyiség</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($packs as $pack)
                    <tr class="bg">
                        <td>
                            <span>{{$pack['drink']}}</span>
                        </td>
                        <td>
                            <span>{{$pack['order_id']}}</span>
                        </td>
                        <td>
                            <span>{{$pack['price']}}</span>
                        </td>
                        <td>
                            <span>{{$pack['quantity']}}</span>
                        </td>
                        <td>
                            <a href="{{ route('cart.remove', $pack['drink_id']) }}">Remove</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="float-right">
                    <label for="total">Összes:</label>
                    <input type="number" id="total" placeholder = "Összesen"  class="form-control" readonly ><br>
                </div>
            </div>
        </div>
        <div class="footer" style="position: fixed;left: 0; bottom: 0; width: 100%;background-color: white; color: black;text-align: center;">
            <p>Impact 2.0 ©Copyright 2021</p>
        </div>
    </div>
@endsection
