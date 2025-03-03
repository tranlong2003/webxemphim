<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="{{asset('css/Register.css')}}">
</head>
<body>
    <div class="register-container">
        <h2>Đăng Ký</h2>
        <form  method="POST">
            @csrf()
            <input type="email" name="email" placeholder="Email/Tên đăng nhập" >
            <input type="password" name="password" placeholder="Mật khẩu" >
            <input type="password" name="re-password" placeholder="Nhập lại mật khẩu" >
            <button type="submit" class="register-btn">Đăng Ký</button>
            <div class="links">
                <a href="#">Đã có tài khoản? Đăng nhập</a>
            </div>
        </form>
    </div>
</body>
</html>
`