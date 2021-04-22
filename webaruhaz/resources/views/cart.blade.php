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
                <input type="hidden" name="order" value="{{ $order_id }}" />
            </form>
            <table class="table table-borderless text-md-center col-8 table-responsive">
                <thead>
                <tr class="border-top">
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Piece</th>
                    <th scope="col">Unit price</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($packs as $pack)
                    <tr class="bg">
                        <td scope="row"> <a href="#" class="img-wrap"> </a></td>
                        <td>
                            {{ $pack['drink']->title }}
                        </td>
                        <td>
                            <input name="quantity_{{ $pack['drink']->id }}" id="quantity_{{ $pack['drink']->id }}" type="number" value ="{{$pack['quantity']}}" min="0" class="form-control form-control-cart" form="post_form">
                        </td>
                        <td>
                            <a id="price_{{ $pack['drink']->id }}">{{ $pack['drink']->price }}</a> Ft
                        </td>
                        <td>
                            <div id="sum_price_{{ $pack['drink']->id}}"></div> Ft
                        </td>
                        <td>
                            <a href="{{ route('cart.remove', $pack['drink']->id) }}">Remove</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="float-right">
                    <label for="total">Total:</label>
                    <input type="number" id="total" placeholder = "totalprice"  class="form-control" readonly ><br>
                    <button type="submit" form="post_form" style="background-color:purple; border-color:purple" class="btn btn-outline-warning form-control">Buy</button>
                </div>
            </div>
        </div>
            <section class="section-pagetop bg">
                <div class="container">
                    <h2 class="title-page">Your cart is currently empty.</h2>
                </div>
            </section>
        <div class="footer" style="position: fixed;left: 0; bottom: 0; width: 100%;background-color: white; color: black;text-align: center;">
            <p>©Copyright 2021</p>
        </div>
    </div>
@endsection
