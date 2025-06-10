<x-auth.layout>
    <x-slot:title>
        Đăng nhập - Spotify
    </x-slot:title>
    <x-auth.title>
        Đăng nhập tài khoản
    </x-auth.title>
    <form action={{ route('session.store') }} method="POST">
        @csrf
        <x-auth.input name="email" type="email" placeholder="Email người dùng">
            Email của bạn
        </x-auth.input>

        <x-auth.input name="password" type="password" placeholder="Mật khẩu">
            Mật khẩu
        </x-auth.input>

        <x-auth.checkbox name="remember">
            Ghi nhớ đăng nhập
        </x-auth.checkbox>

        <a href={{ route('session.forget') }} class="forgot-password">Quên mật khẩu?</a>
        <x-error />

        <button type="submit" class="btn-auth">ĐĂNG NHẬP</button>

        <x-auth.link href="{{ route('register.create') }}" text='Bạn chưa có tài khoản?'>Đăng ký</x-auth.link>
    </form>
</x-auth.layout>
