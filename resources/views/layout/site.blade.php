<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <script src="{{ asset('bootstrap/jquery/jquery-3.7.1.min.js') }}"></script>
    <title> @yield('Title')</title>
</head>

<style>
    .carousel-item img {
        width: 100%;
        height: auto;
    }

    .card {
        max-height: 100%;
        max-width: 100%;
    }

    .card-img-top {
        width: 400px;
        height: 400px;
        /* Đặt kích thước cố định cho chiều cao của ảnh */
        object-fit: cover;
        /* Đảm bảo ảnh không bị biến đổi tỉ lệ */
    }

    .card-img-top {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
</style>

<body>
  {{-- Đây là phần header --}}
  <header class="section_header bg-while">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="index.html">
                        <img src="image/lo0go.webp" class="img-fluid py-3" alt="">
                    </a>
                </div>
                <div class="col-md-8 py-3">
                    <ul class="nav bg-body-tertiary">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Trang chủ</a>
                        </li>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="san-pham" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Sản phẩm
                            </a>
                            <ul class="dropdown-menu font-monospace">
                                <li><a class="dropdown-item" href="san-pham">Kem dưỡng</a></li>
                                <li><a class="dropdown-item" href="san-pham">Mặt nạ</a></li>
                                <li><a class="dropdown-item" href="san-pham">Kem chống nắng</a></li>
                                <li><a class="dropdown-item" href="san-pham">Trang điểm</a></li>
                                <li><a class="dropdown-item" href="san-pham">Best Saler</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-yellow" href="#">Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="lien-he">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Cửa hàng</a>
                        </li>
                    </ul>
                </div>



                <div class="col-md-2 py-3">
                    <ul class="nav justify-content-end">
                        <li class="nav-item px-2">
                            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="#"><i class="fa-regular fa-user"></i></a>
                        </li>
                        <li class="nav-item px-2 position-relative">
                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                            <span
                                class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                                +99
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </li>
                        <li class="nav-item px-2">
                            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

  </header>
  <main>
    @yield('content')
  </main>
<!-- Đây là phần footer -->
  <footer class="section-footer text-white bg-success py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>LIÊN HỆ</h4>
                <p><i class="fa-solid fa-location-dot px-2 "></i>Tầng 6 toà nhà Ladeco, 266 Đội Cấn, Ba Đình, Hà Nội</p>
                <p><i class="fa-solid fa-phone px-2"></i>136942</p>
                <p><i class="fa-solid fa-envelope px-2"></i>innisfree@gmail.com</p>
            </div>
            <div class="col-md">
                <h4>CHĂM SÓC KHÁCH HÀNG</h4>
                <p>Thời gian hỗ trợ
                    24/7 không kể ngày lễ</p>
            </div>
            <div class="col-md">
                <h4>HƯỚNG DẪN</h4>
                <p>Chính sách mua bán
                    Hệ thống kiểm duyệt
                    Chính sách bảo mật
                    Quy định đối với người bán
                    Hướng dẫn mua hàng</p>
            </div>
            <div class="col-md-4">
                <h4>KẾT NỐI</h4>

                    <i class="fa-brands fa-facebook "></i>
                    <i class="fa-brands fa-instagram"></i>

            </div>
            <hr class="'m-0 p-0">
            <div class="row py-3">
                <div class="col-12 ">
                    Bản Quyền thuộc về Lê Thị Bảo Trân!
                </div>

            </div>
        </div>
    </div>
  </footer>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/lyout.js') }}"></script>
</body>
</html>
