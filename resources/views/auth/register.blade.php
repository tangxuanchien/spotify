<x-auth.header>
    Đăng kí - Spotify
    <x-slot:title>
        Đăng kí tài khoản
    </x-slot>
</x-auth.header>
{{-- Add x-auth.social to login social here --}}

<form method="POST" action={{ route('register.store') }}>
    @csrf
    <x-auth.input id="email" type="email" placeholder="Nhập email của bạn"
        form_text="Chúng tôi sẽ gửi email xác nhận đến địa chỉ này.">
        Email của bạn là gì?
    </x-auth.input>

    <x-auth.input id="password" type="password" placeholder="Tạo mật khẩu">
        Tạo mật khẩu
    </x-auth.input>

    <x-auth.input id="username" placeholder="Tên hiển thị của bạn" form_text="Tên này sẽ xuất hiện trên hồ sơ của bạn.">
        Tên hiển thị
    </x-auth.input>

    <div class="form-group">
        <label class="form-label">Ngày sinh</label>
        <div class="date-inputs">
            <div class="form-group">
                <label for="day" class="form-label">Ngày</label>
                <input type="number" class="form-control" id="day" placeholder="DD" min="1"
                    max="31">
            </div>
            <div class="form-group">
                <label for="month" class="form-label">Tháng</label>
                <select class="form-control" id="month">
                    <option value="" selected disabled>Tháng</option>
                    <option value="01">Tháng 1</option>
                    <option value="02">Tháng 2</option>
                    <option value="03">Tháng 3</option>
                    <option value="04">Tháng 4</option>
                    <option value="05">Tháng 5</option>
                    <option value="06">Tháng 6</option>
                    <option value="07">Tháng 7</option>
                    <option value="08">Tháng 8</option>
                    <option value="09">Tháng 9</option>
                    <option value="10">Tháng 10</option>
                    <option value="11">Tháng 11</option>
                    <option value="12">Tháng 12</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year" class="form-label">Năm</label>
                <input type="number" class="form-control" id="year" placeholder="YYYY" min="1900"
                    max="2023">
            </div>
        </div>
    </div>
    <x-auth.checkbox id='email_notifications'>
        Tôi muốn nhận tin tức và ưu đãi từ MusicStream qua email.
    </x-auth.checkbox>

    <x-auth.checkbox id='terms'>
        Tôi đồng ý với
        <a href="#">Điều khoản và Điều kiện sử dụng</a> và
        <a href="#">Chính sách Bảo mật</a> của MusicStream.
    </x-auth.checkbox>

    <x-auth.button>ĐĂNG KÝ</x-auth.button>

    <x-auth.link href='{{route("session.show")}}' text='Bạn đã có tài khoản?'>
        Đăng nhập
    </x-auth.link>
</form>
<x-auth.footer />
