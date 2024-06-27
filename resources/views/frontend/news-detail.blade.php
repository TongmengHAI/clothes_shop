@extends('frontend.master')
@section('title')
    News-Detail
@endsection
@section('Content')

        <main class="shop news-detail">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                {{$news->title}}
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="thumbnail">
                                <img src="../assets/News/{{$news->cover}}" width="500" height="400" alt="">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="detail">
                                <div class="top">
                                    <div class="date">
                                       <span>Publish Date :</span> {{$news->created_at}}
                                    </div>
                                    <div class="viewer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg> {{$news->viewer}}
                                    </div>
                                </div>
                                <hr>
                                <div class="description">
                                    {{$news->descriptions}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

@endsection
