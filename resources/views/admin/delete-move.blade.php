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
            <li><a href="/resources/views/html/Edit film.html">Sửa phim</a></li>
            <li><a href="#delete-movie">Xóa phim</a></li>
        </ul>
    </div>
    <div class="main-content">
        <section id="delete-movie">
            <h2>Xóa phim</h2>
            <form>
                <label for="delete-movie-id">ID phim:</label>
                <input type="text" id="delete-movie-id" name="delete-movie-id" required>
                <button type="submit">Xóa</button>
            </form>
        </section>
    </div>
</body>
</html> 