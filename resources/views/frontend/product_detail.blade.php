@extends('layout.site')
@section('content')
{{-- Phần mô tả sản phẩm và lựa chọn ở đây --}}
    <div class="container">
        <div class="row">
            <div class="col-md">
            </div>
            <div class="col-md-5 py-3">
                <a href="">
                    <img src="../image/sp33.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="col-md-6">
                <h1>Kem dưỡng </h1>
                <div class="row">
                    <div class="col-md py-2 ">
                        <p>Thương Hiệu: <span style="text-align:center; color:rgb(205, 148, 6);">innisfree</span></p>
                    </div>
                    <div class="col-md py-2 ">
                        <p>Tình Trạng: <span style="text-align:center; color:rgb(33, 147, 50);">Còn Hàng</span></p>
                    </div>
                </div>
                <hr class="'m-0 p-0">
                <span>Kem dưỡng nâng tông tự nhiên từ hoa anh đào và Betaine innisfree Cherry Blossom Tone Up Cream, cho làn da tinh khiết, trắng sáng rạng rỡ tức thì. Có thể sử dụng thay kem nền khi muốn trang điểm nhẹ nhàng.</span>
                <hr class="'m-0 p-0">
                <div class="row">
                    <div class="col-md-2 ">
                        Số lượng:
                    </div>
                    <div class="col-md-2 ">
                        <input type="number" class="form-control" id="quantity" value="1" min="1">
                    </div>
                    <div class="col-md-8 ">
                    <h3><span style="text-align:center; color:rgb(50, 57, 51);">VNĐ 200.000</span></h3>

                        {{-- <button type="button" class="btn btn-success btn-buy-now" style="width:100%;"><i
                                class="fas fa-cart-plus"></i>Thêm vào giỏ</button> --}}
                    </div>
                </div>
                <h5>Thêm Voucher</h5>
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập mã voucher"
                            aria-label="Nhập mã voucher" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2">Thêm</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="voucher">Chọn voucher:</label>
                        <select class="form-control" id="voucher">
                            <option value="">Chọn voucher</option>
                            <option value="voucher1">Voucher 1 - Giảm 10%</option>
                            <option value="voucher2">Voucher 2 - Miễn phí vận chuyển</option>
                            <!-- Thêm các voucher khác nếu cần -->
                        </select>
                    </div>
                </form>
                <div class="row">
                    <div class="col py-5">
                        <button type="button" class="btn btn-success btn-buy-now" style="width:100%;">
                            <i class="fas fa-cart-plus"></i>Thêm vào giỏ
                        </button>
                    </div>
                    <div class="col py-5">
                        <button type="button" class="btn btn-success btn-buy-now">Mua hàng</button>
                </div>
                
            </div>
            
        </div>
    </div>

    <!-- Sản phẩm cùng danh mục -->
    <div class="row">
        <h2>Sản phẩm khác tương tự</h2>
        <div class="col-md-3 py-3">
            <a href="#">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="../image/a9.jpg" class="card-img-top img-fluid" alt="...">
                </div>
            </a>
            <a href="#" class="text-decoration-none">
                <h5 style="text-align:center; color:black;">Kem dưỡng ẩm sáng da</h5>
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
                    <a href="#" class="btn btn-light">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3">
            <a href="#">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="../image/a9.jpg" class="card-img-top img-fluid" alt="...">
                </div>
            </a>
            <a href="#" class="text-decoration-none">
                <h5 style="text-align:center; color:black;">Kem dưỡng ẩm sáng da</h5>
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
                    <img src="../image/a9.jpg" class="card-img-top img-fluid" alt="...">
                </div>
            </a>
            <a href="#" class="text-decoration-none">
                <h5 style="text-align:center; color:black;">Kem dưỡng ẩm sáng da</h5>
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
                    <a href="#" class="btn btn-light">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3">
            <a href="#">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="../image/a9.jpg" class="card-img-top img-fluid" alt="...">
                </div>
            </a>
            <a href="#" class="text-decoration-none">
                <h5 style="text-align:center; color:black;">Kem dưỡng ẩm sáng da</h5>
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
                    <a href="#" class="btn btn-light">Xem sản phẩm</a>
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
    <link rel="stylesheet" href="{{ asset('product_detail.css') }}">
@endsection
