@extends('frontend.master')
@section('title')
    Shop
@endsection
@section('Content')
    <main class="shop">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-9">
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

                            <div class="col-12">
                                <ul class="pagination">
                                    @if ($cateID)
                                        @for ($i = 1; $i <= $total_page; $i++)
                                            <li>
                                                <a href="/shop?page={{$i}}&cat={{$cateID}}">{{$i}}</a>
                                            </li>
                                        @endfor

                                    @elseif ($price == 'max')
                                        @for ($i = 1; $i <= $total_page; $i++)
                                            <li>
                                                <a href="/shop?page={{$i}}&price={{$price}}">{{$i}}</a>
                                            </li>
                                        @endfor
                                    @elseif ($price == 'promotion')
                                        @for ($i = 1; $i <= $total_page; $i++)
                                            <li>
                                                <a href="/shop?page={{$i}}&price={{$price}}">{{$i}}</a>
                                            </li>
                                        @endfor
                                    @else
                                        @for ($i = 1; $i <= $total_page; $i++)
                                            <li>
                                                <a href="/shop?page={{$i}}&cat=">{{$i}}</a>
                                            </li>
                                        @endfor
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 filter">
                        <h4 class="title">Category</h4>
                        <ul>
                            <li>
                                <a href="/shop">ALL</a>
                            </li>
                            @foreach ($category as $item)
                                <li>
                                    <a href="/shop?page=1&cat={{$item->id}}">{{$item->name}}</a>
                                </li>
                            @endforeach

                        </ul>

                        <h4 class="title mt-4">Price</h4>
                        <div class="block-price mt-4">
                            <a href="/shop?price=max">High</a>
                            <a href="/shop?price=min">Low</a>
                        </div>

                        <h4 class="title mt-4">Promotion</h4>
                        <div class="block-price mt-4">
                            <a href="/shop?price=promotion">Promotion Product</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
