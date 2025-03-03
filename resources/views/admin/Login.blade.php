<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <div class="login-container">
        <h2>Đăng Nhập</h2>
        <form>
            <input type="email" placeholder="Email/Tên đăng nhập" required>
            <input type="password" placeholder="Mật khẩu" required>
            <button type="submit" class="login-btn">Đăng Nhập</button>
            <div class="links">
                <a href="#">Quên mật khẩu?</a>
                <a href="#">Đăng ký</a>
            </div>
        </form>
    </div>
</body>
</html>