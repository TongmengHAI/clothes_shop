@extends('frontend.master')
@section('title')
    Home
@endsection
@section('Content')
    <main class="home">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            NEW PRODUCTS
                        </h3>
                    </div>
                </div>


                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    @if ($item->sale_price != 0)
                                        <div class="status">
                                            Promotion
                                        </div>
                                    @endif
                                    <a href="{{route('productDetail',['id'=>$item->id])}}">
                                        <img height="300px" style="object-fit: contain" src="{{url('../assets/products/'.$item->thumbnail)}}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        @if ($item->sale_price == 0)
                                            <div class="price">US {{$item->reqular_price}}</div>
                                        @else
                                            <div class="regular-price "><strike> US {{$item->reqular_price}}</strike></div>
                                            <div class="sale-price ">US {{$item->sale_price}}</div>
                                        @endif

                                    </div>
                                    <h5 class="title">{{$item->name}}</h5>
                                </div>
                            </figure>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            PROMOTION PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $item)
                        @if ($item->sale_price != 0)
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">

                                    <a href="{{route('productDetail',['id'=>$item->id])}}">
                                        <img height="300px" style="object-fit: contain" src="{{url('../assets/products/'.$item->thumbnail)}}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                            <div class="price d-none">US {{$item->reqular_price}}</div>
                                            <div class="regular-price "><strike> US {{$item->reqular_price}}</strike></div>
                                            <div class="sale-price ">US {{$item->sale_price}}</div>
                                    </div>
                                    <h5 class="title">{{$item->name}}</h5>
                                </div>
                            </figure>
                        </div>
                        @endif

                    @endforeach


                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            POPULAR PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($population_product as $item)

                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    @if ($item->sale_price != 0)
                                        <div class="status">
                                            Promotion
                                        </div>
                                    @endif
                                    <a href="{{route('productDetail',['id'=>$item->id])}}">
                                        <img height="300px" style="object-fit: contain" src="{{url('../assets/products/'.$item->thumbnail)}}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        @if ($item->sale_price == 0)
                                            <div class="price">US {{$item->reqular_price}}</div>
                                        @else
                                            <div class="regular-price "><strike> US {{$item->reqular_price}}</strike></div>
                                            <div class="sale-price ">US {{$item->sale_price}}</div>
                                        @endif

                                    </div>
                                    <h5 class="title">{{$item->name}}</h5>
                                </div>
                            </figure>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

    </main>
@endsection

