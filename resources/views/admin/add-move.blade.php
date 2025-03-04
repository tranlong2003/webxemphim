<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Phim</title>
    <link rel="stylesheet" href="{{asset('css/film.css')}}">
</head>
<body>
    <div class="sidebar">
        <h2>Quản lý phim</h2>
        <ul>
            <li><a href="#add-film">Thêm phim</a></li>
            <li><a href="/resources/views/html/Edit film.html">Sửa phim</a></li>
            <li><a href="/resources/views/html/Delete film.html">Xóa phim</a></li>
        </ul>
    </div>
    <div class="main-content">
        <section id="add-movie">
            <h2>Thêm phim</h2>
            <form>
                <label for="new-movie-title">Tên phim:</label>
                <input type="text" id="new-movie-title" name="new-movie-title" required>
                <label for="new-movie-description">Mô tả:</label>
                <textarea id="new-movie-description" name="new-movie-description" required></textarea>
                <button type="submit">Thêm</button>
            </form>
        </section>
    </div>
</body>
</html> 