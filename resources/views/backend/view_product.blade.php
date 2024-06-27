@extends('backend.master')
@section('content')
    <div class="content-wrapper">
    @section('site-title')
        Admin | List Product
    @endsection
    @section('page-main-title')
        List Product
    @endsection

    @if (Session::has('delete_success'))
        <script>
            $(document).ready(function() {
                swal("Product was deleted!", {
                    buttons: false,
                    timer: 1000,
                });
            })
        </script>
    @endif

    @if (Session::has('update_success'))
        <script>
            $(document).ready(function() {
                swal("Product was Updated!", {
                    buttons: false,
                    timer: 1000,
                });
            })
        </script>
    @endif
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Regular Price</th>
                            <th>Sale Price</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Description</th>
                            <th>Viewer</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($product as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td><img src="../assets/products/{{$item->thumbnail}}" alt="" width="50px"></td>
                                <td>{{$item->reqular_price}} $</td>
                                <td>{{$item->sale_price}} $</td>
                                <td>{{$item->size}}</td>
                                <td><div style="width: 30px; height:30px; background-color:{{$item->color}} "></div></td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->viewer}}</td>

                                <td>{{$item->category_id}}</td>

                                <td>{{$item->author}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('goUpdateProduct',['id'=>$item->id])}}"
                                                data-value='{{ $item->name}}' data-id={{$item->id}} id="update_product_key"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal" href="javascript:void(0);"
                                                data-value="{{ $item->id }}" id="remove_product_key"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        {{-- delete modal --}}
        <div class="mt-3">
            <form action="/dashboard/delete_product" method="post" enctype="multipart/form-data">
                @csrf
                @method('Delete')
                <div class="modal fade" id="delete_modal" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this product?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="remove_id" name="remove_id">
                                <button type="submit" class="btn btn-danger">Confirm</button>
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <hr class="my-5" />

    </div>
    <!-- / Content -->
</div>
</div>

@endsection


