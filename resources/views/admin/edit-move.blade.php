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
            <li><a href="/resources/views/html/Add film.html">Thêm phim</a></li>
            <li><a href="#edit-film">Sửa phim</a></li>
            <li><a href="/resources/views/html/Delete film.html">Xóa phim</a></li>
        </ul>
    </div>
    <div class="main-content">      
        <section id="edit-movie">
            <h2>Sửa phim</h2>
            <form>
                <label for="edit-movie-id">ID phim:</label>
                <input type="text" id="edit-movie-id" name="edit-movie-id" required>
                <label for="edit-movie-title">Tên phim mới:</label>
                <input type="text" id="edit-movie-title" name="edit-movie-title">
                <label for="edit-movie-description">Mô tả mới:</label>
                <textarea id="edit-movie-description" name="edit-movie-description"></textarea>
                <button type="submit">Lưu</button>
            </form>
        </section>
    </div>
</body>
</html> 