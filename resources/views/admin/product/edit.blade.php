@extends('layouts.my')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Profile Page</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-7">
                    <div class="text-end upgrade-btn">
                        <a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white"
                           target="_blank">Upgrade to Pro</a>
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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2"
                                  method="post" action="{{route('products.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="Name"
                                               class="form-control form-control-line"
                                               value="<?= $product->name ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Category_id</label>
                                    <div class="col-md-12">
                                        <input type="text" name="category_id"
                                               class="form-control form-control-line"
                                               value="<?= $product->category_id ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Price</label>
                                    <div class="col-md-12">
                                        <input type="text" name="price"
                                               class="form-control form-control-line"
                                               value="<?= $product->price ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Img</label>
                                    <div class="col-md-12">
                                        <input type="file" name="img"
                                               class="form-control form-control-line"
                                               value="<?= $product->img ?>">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Status</label>
                                    <div class="col-md-12">
                                        <input type="text" name="status"
                                               class="form-control form-control-line"
                                               value="<?= $product->status ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Description</label>
                                    <div class="col-md-12">
                                        <input type="text" name="description"
                                               class="form-control form-control-line"
                                               value="<?= $product->description ?>">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success text-white">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
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
