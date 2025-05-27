<x-auth.layout>
    <x-slot:title>
        Quên mật khẩu
    </x-slot:title>
    <x-auth.title>
        Quên mật khẩu
    </x-auth.title>
    <form action={{ route('session.forget') }} method="POST">
        @csrf
        <x-auth.input type="email" name="email" placeholder="Email của bạn">Email của bạn</x-auth.input>
        <x-auth.button>Gửi xác nhận mật khẩu</x-auth.button>
    </form>
    @error('forget')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    <x-auth.link href="{{ route('session.show') }}">Quay lại đăng nhập</x-auth.link>
</x-auth.layout>
