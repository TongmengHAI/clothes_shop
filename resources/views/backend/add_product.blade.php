@extends('backend.master')
@section('content')

    @section('site-title')
        Admin | Add Product
    @endsection
    @section('page-main-title')
        Add Product
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/dashboard/add_product" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        {{-- @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif --}}
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="name" class="form-label"> Product name</label>
                                    <input class="form-control" type="text" id="name" name="name"  required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="reqular_price" class="form-label"> Regular Price</label>
                                    <input class="form-control" type="number" id="reqular_price" name="reqular_price"  placeholder="price in dollar($)" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="sale_price" class="form-label"> Sale Price</label>
                                    <input class="form-control" type="number" id="sale_price" name="sale_price" placeholder="price in dollar($)"  required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="thumbnail" class="form-label">Product image</label>
                                    <input class="form-control" type="file" id="thumbnail" name="thumbnail"  required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-2">
                                    <label for="color" class="form-label"> color</label>
                                    <input class="form-control" type="color" id="color" name="color"  required/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 flex-column ">
                                    <label for="size" class="form-label"> Size</label>
                                    {{-- <select class=" form-select" id="size" name="size" required>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="2XL">2XL</option>
                                    </select> --}}
                                    <div class="d-flex gap-4 ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="S" id="flexCheckDefault" checked  name="size[]">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              S
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="M" id="flexCheckChecked"  name="size[]">
                                            <label class="form-check-label" for="flexCheckChecked">
                                              M
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="L" id="flexCheckChecked" name="size[]">
                                            <label class="form-check-label" for="flexCheckChecked">
                                              L
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="XL" id="flexCheckChecked" name="size[]">
                                            <label class="form-check-label" for="flexCheckChecked">
                                              XL
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control"  id="description" name="description" required>Write product description here... </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-2">
                                    <label for="category_id" class="form-label"> Category ID</label>
                                    <select class=" form-select" id="category_id" name="category_id" required>
                                        @foreach ( $category as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" value="{{Auth()->user()->name}}" name="author" id="author">

                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Add Product">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
