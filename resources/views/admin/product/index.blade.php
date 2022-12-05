@extends('layouts.my')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <a href="{{route('products.create')}}" class="btn btn-success">Add</a>
                        <div class="table-responsive">
                            <table class="table v-middle">
                                <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Id</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">Price</th>
                                    <th class="border-top-0">Img</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Description</th>
                                    <th class="border-top-0">Actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $producted)
                                    <tr>
                                        <td>{{$producted->id}}</td>
                                        <td>{{$producted->name}}</td>
                                        <td>{{$producted->category_id}}</td>
                                        <td>{{$producted->price}}</td>
                                        <td>{{$producted->img}}</td>
                                        <td>{{$producted->status}}</td>
                                        <td>{{$producted->description}}</td>
                                        <td>
                                            <a href="{{ route('products.edit', ['product'=> $producted->id]) }}" class="label label-danger">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $product->links('vendor.pagination.bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->


        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Xtreme Admin. Designed and Developed by <a
                href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
@endsection
