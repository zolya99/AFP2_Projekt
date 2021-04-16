@extends('layouts.app')

@section('content')

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                <aside class="col-md-3">

                    <div class="card">
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                    <i class="icon-control orange fa fa-chevron-down"></i>
                                    <h6 class="title">Gyors keresés
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
                                            <input type="text" class="form-control" placeholder="Keresés" id="quick_search">
                                        </div>
                                    </form>
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group  .// -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="false" class="">
                                    <i class="icon-control orange fa fa-chevron-down"></i>
                                    <h6 class="title">Italok
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sunglasses" viewBox="0 0 16 16">
                                            <path d="M3 5a2 2 0 0 0-2 2v.5H.5a.5.5 0 0 0 0 1H1V9a2 2 0 0 0 2 2h1a3 3 0 0 0 3-3 1 1 0 1 1 2 0 3 3 0 0 0 3 3h1a2 2 0 0 0 2-2v-.5h.5a.5.5 0 0 0 0-1H15V7a2 2 0 0 0-2-2h-2a2 2 0 0 0-1.888 1.338A1.99 1.99 0 0 0 8 6a1.99 1.99 0 0 0-1.112.338A2 2 0 0 0 5 5H3zm0 1h.941c.264 0 .348.356.112.474l-.457.228a2 2 0 0 0-.894.894l-.228.457C2.356 8.289 2 8.205 2 7.94V7a1 1 0 0 1 1-1z"/>
                                        </svg>
                                    </h6>
                                </a>
                            </header>
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
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="false" class="">
                                    <i class="icon-control orange fa fa-chevron-down"></i>
                                    <h6 class="title">Ital fajták
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                        </svg>
                                    </h6>
                                </a>
                            </header>
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
                            <header class="card-header" >
                                <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="false" class="">
                                    <i class="icon-control orange fa fa-chevron-down"></i>
                                    <h6 class="title">Ár
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                        </svg>
                                    </h6>
                                </a>
                            </header>
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
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_6" aria-expanded="false" class="">
                                    <i class="icon-control orange fa fa-chevron-down "></i>
                                    <h6 class="title">További szűrők
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                                        </svg>
                                    </h6>

                                </a>
                            </header>
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
                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">

                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height">

                                        <div class="price-wrap mt-2">
                                            <span>{{$product->picture}}</span>
                                            <span>{{$product->name}}</span>
                                            <span>{{$product->description}}</span>
                                            <span class="price">{{$product->price}} Ft</span>
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                    <a class="btn btn-block btn-warning">Add to cart </a>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    @endforeach
                </div>


        </div> <!-- container .//  -->
        </div>
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('page_script')
    <script src="{{ URL::asset('js/shop_ajax.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('js/add_cart.js') }}" type="text/javascript"></script>
@endsection
