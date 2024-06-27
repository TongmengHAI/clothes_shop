@extends('backend.master')
@section('content')
    <div class="content-wrapper">
    @section('site-title')
        Admin | Update Product
    @endsection
    @section('page-main-title')
        Update Product
    @endsection

    {{-- upadate --}}
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <form action="{{route('updateProduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="name" class="form-label"> Product name</label>
                                    <input class="form-control" type="text" id="name" name="name" value="{{$products->name}}"  required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="reqular_price" class="form-label"> Regular Price</label>
                                    <input class="form-control" type="number" id="reqular_price" name="reqular_price" value="{{$products->reqular_price}}"   placeholder="price in dollar($)" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="sale_price" class="form-label"> Sale Price</label>
                                    <input class="form-control" type="number" id="sale_price" name="sale_price" value="{{$products->sale_price}}"  placeholder="price in dollar($)"  required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="thumbnail" class="form-label">Product image</label>
                                    <input class="form-control" type="file" id="thumbnail" name="thumbnail"  />
                                    <input type="hidden" name="old_thumbnail" value="{{$products->thumbnail}}" >
                                    <img src="{{url('../assets/products/'.$products->thumbnail)}}" width="80" alt="aa">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-2">
                                    <label for="color" class="form-label"> color</label>
                                    <input class="form-control" type="color" id="color" name="color" value="{{$products->color}}" required/>
                                </div>
                            </div>

                            <div class="row">
                                <?php
                                    $s=$m=$l=$xl=" ";
                                    foreach ($products->size as $value) {
                                        if($value == 'S'){
                                            $s = "Checked";
                                        }elseif ($value == 'M'){
                                            $m = "Checked";
                                        }elseif ($value == 'L'){
                                            $l = "Checked";
                                        }elseif ($value == 'XL'){
                                            $xl = "Checked";
                                        }
                                    }
                                ?>

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
                                            <input class="form-check-input" type="checkbox" value="S" id="flexCheckDefault"  <?php echo $s ?> name="size[]">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              S
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="M" id="flexCheckChecked" <?php echo $m ?> name="size[]">
                                            <label class="form-check-label" for="flexCheckChecked">
                                              M
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="L" id="flexCheckChecked"<?php echo $l ?> name="size[]">
                                            <label class="form-check-label" for="flexCheckChecked">
                                              L
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="XL" id="flexCheckChecked"<?php echo $xl ?> name="size[]">
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
                                    <textarea class="form-control"  id="description" name="description" required>{{$products->description}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-2">
                                    <label for="category_id" class="form-label"> Category ID</label>

                                    <?php
                                        $cate = $products->category_id;
                                    ?>

                                    <select class=" form-select" id="category_id" name="category_id" required>
                                        @foreach ( $category as $item)
                                            <option value="{{$item->id}}" @if ($item->id === $cate) selected @endif>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" value="{{Auth()->user()->name}}" name="author" id="author">
                            <input type="hidden" value="{{$products->id}}" name="product_id">
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Update Product">
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection


