<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Webshop</title>
    <meta charset="utf-8">
</head>
</html>
@extends('layouts.app')

@section('content')
    <section class="section-content padding-y">


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

        <div class="container">

            <div class="row">
                <aside class="col-md-3">

                    <div class="card">
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                    <i class="icon-control orange fa fa-chevron-down"></i>
                                    <h6 class="title" style="color:black;">Gyors keresés
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                    </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_1" style="">
                                <div class="card-body">
                                    <form class="pb-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Fejlesztés alatt" id="quick_search">
                                        </div>
                                    </form>
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group  .// -->
                        <article class="filter-group">
                            <div class="filter-content collapse in" id="collapse_2" style="">
                                <div class="card-body">
                                    <form method="post" class="pb-3" action="{{ route('shop') }}">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="search_author" name="search_author" placeholder="Keresés">
                                            <!--div class="input-group-append">
                                                <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                                            </div-->
                                        </div>
                                    </form>

                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group  .// -->
                        <article class="filter-group">
                            <div class="filter-content collapse in" id="collapse_3" style="">
                                <div class="card-body">
                                    <form method="post" class="pb-3" action="{{ route('shop') }}">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="search_genre" name="search_genre" placeholder="Keresés" />
                                            <input type="hidden" id="rq_main_search" value="{{ $search_field ?? '' }}" />
                                            <!--div class="input-group-append">
                                                <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                                            </div-->
                                        </div>
                                    </form>
                                    <!--div>
                                        <div class="squaredThree">
                                            <input type="checkbox" name="optionsRadios" id="genre1" value="Genre 1" >
                                            <label for="genre1"></label>
                                        </div>
                                        <label class="label-text" style="margin-left: 10px">Genre 1</label>
                                    </div>
                                    <div>
                                        <div class="squaredThree">
                                            <input type="checkbox" name="optionsRadios" id="genre2" value="Genre 2" >
                                            <label for="genre2"></label>
                                        </div>
                                        <label class="label-text" style="margin-left: 10px">Genre 2</label>
                                    </div>
                                    <div>
                                        <div class="squaredThree">
                                            <input type="checkbox" name="optionsRadios" id="genre3" value="Genre 3" >
                                            <label for="genre3"></label>
                                        </div>
                                        <label class="label-text" style="margin-left: 10px">Genre 3</label>
                                    </div>
                                    <div>
                                        <div class="squaredThree">
                                            <input type="checkbox" name="optionsRadios" id="genre4" value="Genre 4" >
                                            <label for="genre4"></label>
                                        </div>
                                        <label class="label-text" style="margin-left: 10px">Genre 4</label>
                                    </div-->
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <article class="filter-group">
                            <div class="filter-content collapse in"  id="collapse_4" style="">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="price_min">Min</label>
                                            <input name="price_min" id="price_min" class="form-control" value="0" type="number" min="0" oninput="this.value = Math.abs(this.value)">
                                        </div>
                                        <div class="form-group text-right col-md-6">
                                            <label for="price_max">Max</label>
                                            <input name="price_max" id="price_max" class="form-control" value="999999" type="number" min="0" oninput="this.value = Math.abs(this.value)">
                                        </div>
                                    </div> <!-- form-row.// -->
                                </div><!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <article class="filter-group">
                            <div class="filter-content collapse in" id="collapse_6" style="">
                                <h6 class="title card-header">Külföldi italok</h6>
                                <div class="card-body">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="language_radio" value="%" checked="" class="custom-control-input control-orange">
                                        <div class="custom-control-label">Összes</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="language_radio" value="en" class="custom-control-input">
                                        <div class="custom-control-label">Nagy-Britannia</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="language_radio" value="fr" class="custom-control-input">
                                        <div class="custom-control-label">Franciaország</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="language_radio" value="de" class="custom-control-input">
                                        <div class="custom-control-label">Németország</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="language_radio" value="hu" class="custom-control-input">
                                        <div class="custom-control-label">Magyarország</div>
                                    </label>
                                </div><!-- card-body.// -->
                                <h6 class="title card-header">Forgalmazó</h6>
                                <div class="card-body">
                                    <form method="post" class="pb-3"  action="{{ route('shop') }}">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="search_publisher" name="search_publisher" placeholder="Keresés">
                                            <!--div class="input-group-append">
                                                <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                                            </div-->
                                        </div>
                                    </form>
                                </div><!-- card-body.// -->
                                <h6 class="title card-header">Árak</h6>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="page_min">Min</label>
                                            <input name="page_min" id="page_min" class="form-control" value="0" type="number" min="0" oninput="this.value = Math.abs(this.value)">
                                        </div>
                                        <div class="form-group text-right col-md-6">
                                            <label for="page_max">Max</label>
                                            <input name="page_max" id="page_max" class="form-control" value="999999" type="number" min="0" oninput="this.value = Math.abs(this.value)">
                                        </div>
                                    </div> <!-- form-row.// -->
                                </div><!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                <main class="col-md-9">

                    <div id="ajax_target"></div>

                </main> <!-- col.// -->

            </div>
            <div class="container">
                <div class="row">
                    @foreach($drinks as $d)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">

                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="img-wrap">

                                        <img src="{{ asset("image/drink/$d->picture") }}" alt=""/>
                                        <div class="price-wrap mt-2">

                                            <span>{{"Név:"}} {{$d->name}}</span>
                                            <p><span>{{"Leírás:"}} {{$d->description}}</span></p>

                                        </div> <!-- price-wrap.// -->
                                        <span class="price">{{"Ár:"}}  {{$d->price}} Ft</span>
                                    </div>
                                    <input type="text" name="onStock" value=0>
                                    <form>
                                        <a class="btn btn-block btn-warning" href="{{route('cart.add', $d->id)}}" style="background-color: purple; color:black;">Kosárba helyezés </a>
                                    </form>

                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    @endforeach
                </div>


        </div> <!-- container .//  -->
        </div></div>
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('page_script')
    <script src="{{ URL::asset('js/shop_ajax.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('js/add_cart.js') }}" type="text/javascript"></script>
@endsection

<div class="footer" style="position: fixed;left: 0; bottom: 0; width: 100%;background-color: white; color: black;text-align: center;">
    <p>Impact 2.0 ©Copyright 2021</p>
</div>
</div>
