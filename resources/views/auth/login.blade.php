<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Music Stream</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <a href="index.html" class="logo">MusicStream</a>
        </div>
    </header>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-card">
            <h1 class="login-title">Đăng nhập vào MusicStream</h1>

            <!-- Social Login Buttons -->
            <div class="social-login">
                <a href="#" class="btn-social btn-facebook">
                    <i class="bi bi-facebook"></i>
                    <span>Tiếp tục với Facebook</span>
                </a>
                <a href="#" class="btn-social btn-google">
                    <i class="bi bi-google"></i>
                    <span>Tiếp tục với Google</span>
                </a>
                <a href="#" class="btn-social btn-apple">
                    <i class="bi bi-apple"></i>
                    <span>Tiếp tục với Apple</span>
                </a>
            </div>

            <!-- Divider -->
            <div class="divider">
                <span>hoặc</span>
            </div>

            <!-- Login Form -->
            <form action={{route('login.store')}} method="POST">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email hoặc tên người dùng</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email hoặc tên người dùng">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Ghi nhớ đăng nhập</label>
                </div>

                <a href="#" class="forgot-password">Quên mật khẩu?</a>

                <button type="submit" class="btn-login">ĐĂNG NHẬP</button>

                <div class="signup-link">
                    <p>Bạn chưa có tài khoản? <a href="#">Đăng ký</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links mb-3">
                <a href="#">Pháp lý</a>
                <a href="#">Trung tâm bảo mật</a>
                <a href="#">Chính sách riêng tư</a>
                <a href="#">Cookies</a>
                <a href="#">Giới thiệu</a>
            </div>
            <div class="copyright">
                © 2025 MusicStream
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
