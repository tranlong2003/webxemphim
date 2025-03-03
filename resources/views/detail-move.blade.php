<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Phim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #111;
            color: #fff;
        }
        .movie-container {
            display: flex;
            margin: 20px;
        }
        .movie-poster img {
            width: 250px;
        }
        .movie-info {
            margin-left: 20px;
        }
        .top-movies {
            margin-top: 20px;
        }
        .top-movies img {
            width: 80px;
            height: 120px;
            object-fit: cover;
        }
        .video-container {
            text-align: center;
            margin-top: 20px;
        }
        .video-container video {
            width: 100%;
            max-width: 800px;
        }
        .comment-section {
            margin-top: 20px;
            padding: 10px;
            background-color: #222;
            border-radius: 5px;
        }
        .warning {
            color: red;
            font-weight: bold;
        }
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
                        <h2 class="text-warning">LÍNH BẮN TỈA 2</h2>
                        <p><strong>Thể loại:</strong> Hành Động</p>
                        <p><strong>Đạo diễn:</strong> Craig R. Baxley</p>
                        <p><strong>Diễn viên:</strong> Tom Berenger, Bokeem Woodbine...</p>
                        <p><strong>Đánh giá:</strong> ⭐⭐⭐⭐⭐ (8.0/10)</p>
                        <button class="btn btn-danger">XEM PHIM</button>
                    </div>
                </div>
                <hr>
                <h4 class="text-warning">NỘI DUNG CHI TIẾT</h4>
                <p>Lính Bắn Tỉa 2, Sniper 2
Trung sĩ Thomas Beckett đã trở lại - và lần này anh đã hợp tác với tử tù B.J. Cole trong một nhiệm vụ liều chết đến vùng Balkan. Mục tiêu của họ: một vị tướng lưu manh bị buộc tội điều hành các nhiệm vụ thanh trừng sắc tộc. Nhưng khi Becket phát hiện ra rằng chính phủ đang sử dụng anh ta như một con tốt trong một nhiệm vụ lớn hơn, số lượng cơ thể tăng lên và đạn thực sự bắt đầu bay.
</p>
                <div class="video-container">
                    <video controls>
                        <source src="movie.mp4" type="video/mp4">
                        Trình duyệt của bạn không hỗ trợ video.
                    </video>
                </div>
                <hr>
                <div class="comment-section">
                    <h4>Bình luận</h4>
                    <p class="warning">Lưu ý các bạn không nên nhấp vào các đường link ở phần bình luận, kẻ gian có thể đưa virus vào thiết bị hoặc hack mất Facebook của các bạn.</p>
                    <textarea class="form-control" placeholder="Nhập bình luận..."></textarea>
                    <button class="btn btn-primary mt-2">Gửi</button>
                </div>
            </div>
            <div class="col-md-4 top-movies">
                <h4 class="text-warning">TOP PHIM LẺ</h4>
                <div class="d-flex mb-2">
                    <img src="https://cdn.vailon.cc/images/578-phat-dan-cua-ke-dien/thumb.jpg" alt="Movie 1">
                    <div class="ms-2">
                        <p class="mb-0">Phát súng của kẻ điên</p>
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
            </div>
        </div>
    </div>
</body>
</html>
