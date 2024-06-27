@extends('frontend.master')
@section('title')
    News
@endsection
@section('Content')
    <main class="shop news-blog">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            NEWS BLOG
                        </h3>
                    </div>
                </div>

                <div class="row gap-5">
                    @foreach ($news_list as $item)
                        <div class="col-3 m-4" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; height:400px; overflow:hidden; padding: 20px;">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/news/news_detail?id={{$item->id}}">
                                        <img src="../assets/News/{{$item->cover}}" width="450" height="300" style="object-fit: cover" alt="">
                                    </a>
                                </div>
                                <div class="detail" style="padding-bottom: 20px">
                                    <h5 class="title">{{$item->descriptions}}</h5>
                                </div>
                            </figure>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    </main>
@endsection
