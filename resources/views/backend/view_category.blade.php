@extends('backend.master')
@section('content')
    <div class="content-wrapper">
    @section('site-title')
        Admin | List Category
    @endsection
    @section('page-main-title')
        List Category
    @endsection

    @if (Session::has('delete_success'))
        <script>
            $(document).ready(function() {
                swal("Category was deleted!", {
                    buttons: false,
                    timer: 1000,
                });
            })
        </script>
    @endif

    @if (Session::has('update_success'))
        <script>
            $(document).ready(function() {
                swal("Category was Updated!", {
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
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($category as $item)
                            <tr>

                                <td>{{ $item->name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#update_modal" data-value='{{ $item->name}}' data-id={{$item->id}} id="update_category_key"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal" href="javascript:void(0);"
                                                data-value="{{ $item->id }}" id="remove_category_key"><i
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
            <form action="/dashboard/delete_category" method="post">
                @csrf
                @method('Delete')
                <div class="modal fade" id="delete_modal" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this category?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <input type="text" id="remove_id" name="remove_id">
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
        {{-- upadate modal  --}}
        <div class="mt-3">
            <form action="/dashboard/update_category" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal fade" id="update_modal" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <h1 class="mx-3 mt-3">Update Category</h1>
                            <div class="card-body">

                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="formFile" class="form-label">Category</label>
                                        <input class="form-control" type="text" name="new_category"  id="new_category"/>
                                        <input class="form-control" type="hidden" name="category_id"  id="category_id"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary" value="Update Category">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- / Content -->
</div>
</div>

@endsection
