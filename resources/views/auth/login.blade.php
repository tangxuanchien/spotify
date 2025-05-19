<x-auth.header>
    Đăng nhập - Spotify
    <x-slot:title>
        Đăng nhập
    </x-slot>
</x-auth.header>
<form action={{ route('session.store') }} method="POST">
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

    <button type="submit" class="btn-auth">ĐĂNG NHẬP</button>

    <div class="auth-link">
        <p>Bạn chưa có tài khoản? <a href={{ route('register.create') }}>Đăng ký</a></p>
    </div>
</form>
<x-auth.footer />
