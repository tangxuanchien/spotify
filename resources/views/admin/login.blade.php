<x-auth.layout>
    <x-slot:title>
        Đăng nhập quản trị - Spotify
    </x-slot:title>
    <x-auth.title>
        Đăng nhập quản trị
    </x-auth.title>
    <form action={{ route('admin.session.store') }} method="POST">
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
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="text-danger mb-2">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <button type="submit" class="btn-auth">ĐĂNG NHẬP</button>

        <x-auth.link href="{{ route('register.create') }}" text='Bạn chưa có tài khoản?'>Đăng ký</x-auth.link>
    </form>
</x-auth.layout>
