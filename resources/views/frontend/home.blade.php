@extends('layout.site')
@section('content')
    <!-- Nội dung ghi ở đây -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <By type="By" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></By>
          <By type="By" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></By>
          <By type="By" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></By>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/slider_1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/slider_2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/slider_3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <By class="carousel-control-prev" type="By" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </By>
          <By class="carousel-control-next" type="By" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </By>
        </div>
    <!-- code danh mục -->
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-md-3">
                <a href="link-den-trang-ao" class="text-decoration-none text-dark">
                    <h4 style="text-align:center;">Kem dưỡng</h4>
                </a>
            </div>
            <div class="col-md-3">
                <a href="link-den-trang-quan" class="text-decoration-none text-dark">
                    <h4 style="text-align:center;">Trang điểm</h4>
                </a>
            </div>
            <div class="col-md-3">
                <a href="link-den-trang-skincare" class="text-decoration-none text-dark">
                    <h4 style="text-align:center;">Serum</h4>
                </a>
            </div>
            <div class="col-md-3">
                <a href="link-den-trang-phu-kien" class="text-decoration-none text-dark">
                    <h4 style="text-align:center;">Chống nắng</h4>
                </a>
            </div>
        </div>
    </div>
    <!-- code phần product new  -->
    <div class="container py-3" style="background-color: #d5dfd2;">
        <h2>Sản phẩm mới</h2>
        <div class="row">
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center">
                        <img src="image/sp1.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center; ">Sữa rửa mặt</h5>
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
                        <a href="#" class="btn btn-light mr-2" ><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center">
                        <img src="image/sp22.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Kem dưỡng</h5>
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
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center">
                        <img src="image/sp33.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Kem dưỡng</h5>
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
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center">
                        <img src="image/a6.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Siêu mặt nạ đất sét đá tro núi lửa</h5>
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
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                   
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- code -	product sale -->
    <div class="container py-3" style="background-color: #d5dfd2;">
        <h2>Sản phẩm khuyến mãi</h2>
        <div class="row">
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column  align-items-center text-white">
                        <img src="image/a2.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Kem dưỡng</h5>
                </a>
                <div class="row">
                    <div class="col-md">
                        <p class="price"><span class="text-danger">Giá: $18.99</span></p>
                    </div>
                    <div class="col-md">
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-23</i><i
                                class="fa-solid fa-percent"></i></i>
                    </div>
                    <div class="col-md">
                        Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                   
                </div>
            </div>
            <!-- Tương tự cho các sản phẩm còn lại -->
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column  text-white">
                        <img src="image/a3.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Toner</h5>
                </a>
                <div class="row">
                    <div class="col-md">
                        <p class="price"><span class="text-danger">Giá: $18.99</span></p>
                    </div>
                    <div class="col-md">
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-23</i><i
                                class="fa-solid fa-percent"></i></i>
                    </div>
                    <div class="col-md">
                        Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column  text-white">
                        <img src="image/a4.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Chì kẻ mắt</h5>
                </a>
                <div class="row">
                    <div class="col-md">
                        <p class="price"><span class="text-danger">Giá: $18.99</span></p>
                    </div>
                    <div class="col-md">
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-23</i><i
                                class="fa-solid fa-percent"></i></i>
                    </div>
                    <div class="col-md">
                        Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column  text-white">
                        <img src="image/a5.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Cussion</h5>
                </a>
                <div class="row">
                    <div class="col-md">
                        <p class="price"><span class="text-danger">Giá: $18.99</span></p>
                    </div>
                    <div class="col-md">
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-23</i><i
                                class="fa-solid fa-percent"></i></i>
                    </div>
                    <div class="col-md">
                        Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- code -	post new -->
    <div class="container py-3">
        <h2 class="text-center mb-4">INNISFREE GỢI Ý CHO BẠN</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="image/a7.jpg" class="card-img-top" alt="Post 1">
                    <div class="card-body">
                        <a href="#" class="text-decoration-none text-dark">
                            <h5 style="text-align:center;">Kem dưỡng</h5>
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
                                <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/a6.jpg" class="card-img-top" alt="Post 2">
                    <div class="card-body">
                        <a href="#" class="text-decoration-none text-dark">
                            <h5 style="text-align:center;">Kem dưỡng</h5>
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
                                <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/a9.jpg" class="card-img-top" alt="Post 3">
                    <div class="card-body">
                        <a href="#" class="text-decoration-none text-dark">
                            <h5 style="text-align:center;">Kem dưỡng</h5>
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
                                <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- đặt tên cho trang web --}}
@section('title', 'Trang Chủ')
{{-- Dùng để code css cho trang này --}}
@section('header')
    <link rel="stylesheet" href="{{ asset('home.css') }}">
@endsection
