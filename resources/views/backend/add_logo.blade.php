@extends('backend.master')
@section('content')

    @section('site-title')
        Admin | Add Logo
    @endsection
    @section('page-main-title')
        Add Logo
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/dashboard/add_logo" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        {{-- @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif --}}
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Logo<span class="recomment_size"> size: 180px x 40px</span></label>
                                    <input class="form-control" type="file" name="add_logo" />
                                </div>

                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Add Logo">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
