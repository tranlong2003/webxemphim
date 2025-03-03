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
    </style>    
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="movie-container">
                    <div class="movie-poster">
                        <img src="https://cdn.vailon.cc/images/linh-ban-tia-2/thumb.jpg" alt="Lính Bắn Tỉa 2">
                    </div>
                    <div class="movie-info">
                        <h2 class="text-warning">Tiệm ăn của quỷ</h2>
                        <p><strong>Thể loại:</strong> Hành Động</p>
                        <p><strong>Đạo diễn:</strong> Craig R. Baxley</p>
                        <p><strong>Diễn viên:</strong> Tom Berenger, Bokeem Woodbine...</p>
                        <p><strong>Đánh giá:</strong> ⭐⭐⭐⭐⭐ (8.0/10)</p>
                        <a href="{{ url('/detail-move') }}" class="btn btn-danger">XEM PHIM</a>
                    </div>
                </div>
                <hr>
                <h4 class="text-warning">NỘI DUNG CHI TIẾT</h4>
                <p>Trung sĩ Thomas Beckett đã trở lại - và lần này anh đã hợp tác với tử tù B.J. Cole trong một nhiệm vụ liều chết đến vùng Balkan. Mục tiêu của họ: một vị tướng lưu manh bị buộc tội điều hành các nhiệm vụ thanh trừng sắc tộc. Nhưng khi Becket phát hiện ra rằng chính phủ đang sử dụng anh ta như một con tốt trong một nhiệm vụ lớn hơn, số lượng cơ thể tăng lên và đạn thực sự bắt đầu bay.</p>
            </div>
            <div class="col-md-4 top-movies">
                <h4 class="text-warning">TOP PHIM LẺ</h4>
                <div class="d-flex mb-2">
                    <img src="https://cdn.vailon.cc/images/cuoc-dua-tu-than-3/thumb.jpg" alt="Movie 1">
                    <div class="ms-2">
                        <p class="mb-0">Cuộc đua tử thần</p>
                        <small>FULL Vietsub</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <img src="https://cdn.vailon.cc/images/biet-doi-hanh-dong/thumb.jpg" alt="Movie 2">
                    <div class="ms-2">
                        <p class="mb-0">Biệt đội hành động</p>
                        <small>FULL Vietsub</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <img src="https://cdn.vailon.cc/images/578-phat-dan-cua-ke-dien/thumb.jpg" alt="Movie 3">
                    <div class="ms-2">
                        <p class="mb-0">Phát súng của kẻ điên</p>
                        <small>FULL Vietsub</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <img src="https://cdn.vailon.cc/images/578-phat-dan-cua-ke-dien/thumb.jpg" alt="Movie 3">
                    <div class="ms-2">
                        <p class="mb-0">Phát súng của kẻ điên</p>
                        <small>FULL Vietsub</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <img src="https://cdn.vailon.cc/images/578-phat-dan-cua-ke-dien/thumb.jpg" alt="Movie 3">
                    <div class="ms-2">
                        <p class="mb-0">Phát súng của kẻ điên</p>
                        <small>FULL Vietsub</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

    <footer style="background-color: #333; color: #ddd; padding: 20px; font-family: Arial, sans-serif;">
    <div style="display: flex; justify-content: space-between; max-width: 1200px; margin: auto;">
        <div style="max-width: 60%;">
            <p>
                <b>Xem phim online</b> miễn phí chất lượng cao với phụ đề tiếng Việt - thuyết minh - lồng tiếng. 
             có nhiều thể loại phim phong phú, đặc sắc, nhiều bộ phim hay nhất - mới nhất với giao diện 
                trực quan, thuận tiện, tốc độ tải nhanh, thường xuyên cập nhật các bộ phim mới hứa hẹn sẽ đem lại những trải nghiệm tốt cho người dùng.
            </p>
            <p>BÀi Tập Lớn: <a href="#" style="color: #00aaff;">@nhom1vippro</a></p>
        </div>
        <div>
            <h4>Quy định</h4>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#" style="color: #ddd; text-decoration: none;">Điều khoản chung</a></li>
                <li><a href="#" style="color: #ddd; text-decoration: none;">Chính sách riêng tư</a></li>
            </ul>
        </div>
        <div>
            <h4>Giới thiệu</h4>
            <ul style="list-style: none; padding: 0;">
                <li><a href="https://zalo.me/0337457055" style="color: #ddd; text-decoration: none;">LIÊN HỆ</a></li>
                <li><a href="https://www.facebook.com/hackers1tg.1" style="color: #ddd; text-decoration: none;">Facebook</a></li>
            </ul>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

