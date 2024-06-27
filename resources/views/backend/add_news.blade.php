@extends('backend.master')
@section('content')

    @section('site-title')
        Admin | Add News
    @endsection
    @section('page-main-title')
        Add News
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{route('addNews')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">

                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Title</label>
                                    <input class="form-control" type="text" name="title"/>
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Cover</label>
                                    <input class="form-control" type="file" name="cover"/>
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Description</label>
                                    <br><textarea name="description" id="" cols="30" rows="10">

                                    </textarea>
                                </div>

                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Add News">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
