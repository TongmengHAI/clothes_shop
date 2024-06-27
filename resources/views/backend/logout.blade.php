@extends('backend.master')
@section('content')
    <div class="content-wrapper">
    @section('site-title')
        Admin |Logout
    @endsection
    @section('page-main-title')
        Logout
    @endsection

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card p-3">
            <div class="table-responsive text-nowrap">
                <h1>Are you want to logout?</h1>
                <form action="{{route('logout')}}" method="POST" >
                    @csrf
                    <a href="{{route('dashboard')}}" class="btn btn-secondary">No</a>
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>




    </div>
    <!-- / Content -->
</div>
</div>

@endsection
