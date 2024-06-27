@extends('frontend.master')
@section('title')
    Product Detail
@endsection
@section('Content')
    <main class="product-detail">

        <section class="review">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="thumbnail">
                            <img src="{{url('/assets/products/'.$product->thumbnail)}}" alt="">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="detail">
                            <div class="price-list">
                                @if ($product->sale_price == 0)
                                    <div class="price">US {{$product->reqular_price}}</div>
                                @else
                                    <div class="regular-price "><strike> US {{$product->reqular_price}}</strike></div>
                                    <div class="sale-price ">US {{$product->sale_price}}</div>
                                @endif

                            </div>
                            <h5 class="title">{{$product->name}}</h5>
                            <div class="group-size">
                                <span class="title">Color Available</span>
                                <div class="" style=" width:30px; height:30px;background-color: {{$product->color}}">

                                </div>
                            </div>
                            <div class="group-size">
                                <span class="title">Size Available</span>


                                <div class="group">
                                    @foreach ($product->size as $item)
                                        <input type="checkbox" name="{{$item}}" id="{{$item}}" value="{{$item}}">
                                        <label for="{{$item}}">{{$item}}</label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="group-size">
                                <span class="title">Description</span>
                                <div class="description">
                                    {{$product->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            RELATED PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relate_product as $item)
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
