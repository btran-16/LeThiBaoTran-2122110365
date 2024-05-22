@extends('layout.site')
@section('content')
<div class="breadcrumb">

    <!-- đây là phần list product card -->
    <div class="container">
        <div class="row">
            <div class="col-md-2 py-3">
                <div class="row">
                    <!-- Filter ở đây -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="lnbTop">
                                <a href="/product/best" style="color:#024137; text-decoration: none">SẢN PHẨM BÁN CHẠY</a>
                                <hr class="'m-0 p-0">
                                <a href="/product/new" style="color:#f9c862; text-decoration: none">SẢN PHẨM MỚI</a>
                                <hr class="'m-0 p-0">
                                <a href="/product/flashsale" style="color:#12b560; text-decoration: none">FLASH SALE</a>
                                <hr class="'m-0 p-0">
                                <a href="/product/" style="color:#f68733; text-decoration: none">ĐỘC QUYỀN ONLINE</a>
                                <hr class="'m-0 p-0">
                            </div>
                        </div>
                        <li class="dep1" id="dep1_101"><a href="#" style="color:#121111; text-decoration: none">NGUYÊN LIỆU</a></li>
                        <li class="dep1" id="dep1_101"><a href="#" style="color:#121111; text-decoration: none">DƯỠNG DA</a></li>
                        <li class="dep1" id="dep1_101"><a href="#" style="color:#121111; text-decoration: none">TRANG ĐIỂM</a></li>
                        <li class="dep1" id="dep1_101"><a href="#" style="color:#121111; text-decoration: none">CHĂM SÓC TÓC</a></li>

                    </div>
                   
                    

                </div>
            </div>
            <div class="col-md-10 py-3">
                <div class="row">
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Sữa rửa mặt</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!--  -->
@endsection
{{-- đặt tên cho trang web --}}
@section('title', 'Trang Chủ')
{{-- Dùng để code css cho trang này --}}
@section('header')
    <link rel="stylesheet" href="{{ asset('product.css') }}">
@endsection
