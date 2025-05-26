<x-auth.header>
    Đăng kí - Spotify
    <x-slot:title>
        Đăng kí tài khoản
    </x-slot>
</x-auth.header>

<form method="POST" action={{ route('register.store') }}>
    @csrf
    <x-auth.input name="email" type="email" placeholder="Nhập email của bạn"
        form_text="Chúng tôi sẽ gửi email xác nhận đến địa chỉ này.">
        Email của bạn là gì?
    </x-auth.input>

    <x-auth.input name="password" type="password" placeholder="Tạo mật khẩu" minlength="6">
        Tạo mật khẩu
    </x-auth.input>

    <x-auth.input name="name" placeholder="Tên hiển thị của bạn" form_text="Tên này sẽ xuất hiện trên hồ sơ của bạn.">
        Tên hiển thị
    </x-auth.input>

    <x-auth.date>Ngày sinh</x-auth.date>

    <x-auth.checkbox name='email_notifications'>
        Tôi muốn nhận tin tức và ưu đãi từ Spotify qua email.
    </x-auth.checkbox>

    <x-auth.checkbox name='terms' required>
        Tôi đồng ý với
        <a href="#">Điều khoản và Điều kiện sử dụng</a> và
        <a href="#">Chính sách Bảo mật</a> của Spotify.
    </x-auth.checkbox>
    @error('email')
        <div class="text-danger mb-2">
            {{ $message }}
        </div>
    @enderror

    <x-auth.button>ĐĂNG KÝ</x-auth.button>

    <x-auth.link href="{{ route('session.show') }}" text='Bạn đã có tài khoản?'>
        Đăng nhập
    </x-auth.link>
</form>
<x-auth.footer />
