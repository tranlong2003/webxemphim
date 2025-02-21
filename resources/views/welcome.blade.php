<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotChill - Xem Phim Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header class="bg-dark text-white p-3 d-flex justify-content-between align-items-center">
        <div class="logo h3">nhom<span>mot</span></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Trang Chủ</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Thể Loại</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Hành Động</a></li>
                                <li><a class="dropdown-item" href="#">Kinh Dị</a></li>
                                <li><a class="dropdown-item" href="#">Hài Hước</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Quốc Gia</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Phim Chiếu Rạp</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Phim Bộ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Phim Lẻ</a></li>
                        </ul>
                        </nav>
        <div class="input-group w-25">
            <input type="text" class="form-control" placeholder="Nhập tên phim bạn muốn tìm kiếm...">
            <button class="btn btn-outline-light">🔍</button>
        </div>
        <div class="auth-buttons">
            <a href="login.php" class="login-btn" >Đăng nhập</a>
            <a href="register.php" class="register-btn" >Đăng ký</a>
        </div>
    </header>
            </div>
    </header>
    
    <section class="container my-4">
        <h2 class="text-center">PHIM ĐỀ CỬ</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/ban-ban-be-be-15183-thumb.webp" class="card-img-top" alt="Tiệm Ăn Của Quỷ">
                    <div class="card-body text-center">
                        <p class="card-text">Tiệm Ăn Của Quỷ (Devil's Diner)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/ngu-phuc-lam-mon-15059-thumb.webp" class="card-img-top" alt="Ngũ Phúc Lâm Môn">
                    <div class="card-body text-center">
                        <p class="card-text">Ngũ Phúc Lâm Môn (Perfect Match)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/cay-o-liu-mau-trang-15032-thumb.webp" class="card-img-top" alt="Cây Ô Liu Màu Trắng">
                    <div class="card-body text-center">
                        <p class="card-text">Cây Ô Liu Màu Trắng (The White Olive Tree)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/gui-toi-cua-nam-1999-15029-thumb.webp" class="card-img-top" alt="Gửi Tôi Của Năm 1999">
                    <div class="card-body text-center">
                        <p class="card-text">Gửi Tôi Của Năm 1999 (Reopen My Journals)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4">
        <h2 class="text-warning text-center">PHIM MỚI CẬP NHẬT</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-dark text-white border-0">
                    <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/cay-o-liu-mau-trang-15032-thumb.webp" class="card-img-top" alt="Movie 1">
                    <span class="badge bg-warning text-dark position-absolute m-2">Hoàn Tất (38/38) Vietsub + Thuyết Minh</span>
                    <div class="card-body text-center">
                        <p class="card-text">Cây Ô Liu Màu Trắng</p>
                        <small class="text-muted">The White Olive Tree</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-dark text-white border-0">
                    <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/phai-long-nang-phu-thuy-15330-thumb.webp" class="card-img-top" alt="Movie 2">
                    <span class="badge bg-warning text-dark position-absolute m-2">Tập 2 Vietsub</span>
                    <div class="card-body text-center">
                        <p class="card-text">Phải Lòng Nàng Phù Thủy</p>
                        <small class="text-muted">The Witch</small>
                    </div>
                </div>
            </div>
            <!-- Thêm các phim khác tương tự -->
        </div>

        <h2 class="text-warning text-center mt-4">TRENDING</h2>
        <ol class="list-group list-group-numbered bg-dark">
            <li class="list-group-item bg-dark text-white border-0 d-flex justify-content-between">
                <span>Khi Điện Thoại Đổ Chuông</span> <span class="text-warning">338,782 lượt xem</span>
            </li>
            <li class="list-group-item bg-dark text-white border-0 d-flex justify-content-between">
                <span>Trò Chơi Con Mực (Phần 2)</span> <span class="text-warning">144,040 lượt xem</span>
            </li>
            <!-- Thêm các phim trending khác tương tự -->
        </ol>
    </div>
    <div class="container mt-4">
        <h2 class="mb-4" style="color:#fff">PHIM CHIẾU RẠP MỚI</h2>
        <div class="row">
            <div class="col-md-3 col-6 movie-card">
                <span class="label" >Trailer Vietsub</span>
                <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/Phim-Rider-Giao-hang-cho-ma.jpg" alt="Movie Poster">
                <p class="movie-title"style="color:#fff">Rider: Giao Hàng Cho Ma</p>
            </div>
            <div class="col-md-3 col-6 movie-card">
                <span class="label">Trailer Vietsub</span>
                <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/ke-dong-hanh.jpg" alt="Movie Poster">
                <p class="movie-title" style="color:#fff">Kẻ Đồng Hành</p>
            </div>
            <div class="col-md-3 col-6 movie-card">
                <span class="label">Trailer Vietsub</span>
                <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/phim-Chi-Dau.jpg" alt="Movie Poster">
                <p class="movie-title" style="color:#fff">Chị Dâu</p>
            </div>
            <div class="col-md-3 col-6 movie-card">
                <span class="label">Trailer</span>
                <img src="https://www.pineridgefilm.com/wp-content/uploads/2025/02/phim-404-chay-ngay-di.jpg" alt="Movie Poster">
                <p class="movie-title" style="color:#fff">404 - Chạy Ngay Đi</p>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
