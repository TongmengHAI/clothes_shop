@extends('backend.master')
@section('content')
    <div class="content-wrapper">
    @section('site-title')
        Admin | Update news
    @endsection
    @section('page-main-title')
        Update news
    @endsection

    {{-- upadate --}}
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <form action="{{route('updateNews')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="title" class="form-label"> Title</label>
                                    <input class="form-control" type="text" id="title" name="title" value="{{$news->title}}"  required/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="thumbnail" class="form-label">Cover</label>
                                    <input class="form-control" type="file" id="cover" name="cover"  />
                                    <input type="hidden" name="old_cover" value="{{$news->cover}}" >
                                    <img src="{{url('../assets/News/'.$news->cover)}}" width="80" alt="aa">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="descriptions" class="form-label"> Descriptions</label>
                                    <input class="form-control" type="text" id="descriptions" name="description" value="{{$news->descriptions}}"  required/>
                                </div>
                            </div>

                            <input type="text" value="{{$news->id}}" name="news_id">
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Update news">
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection


