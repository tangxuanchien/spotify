@extends('layouts.layout')

@section('title', 'Music Spotify')

@section('content')
    <div class="main-content">
        <h1 class="section-title">Chào buổi tối</h1>
        <div class="row mb-5">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="#" alt="Playlist">
                    <div class="card-title">Nhạc Việt Hot</div>
                    <div class="card-text">Những bài hát Việt Nam thịnh hành nhất hiện nay</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="#" alt="Playlist">
                    <div class="card-title">Chill & Relax</div>
                    <div class="card-text">Thư giãn với những giai điệu nhẹ nhàng</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="#" alt="Playlist">
                    <div class="card-title">Bài hát đã thích</div>
                    <div class="card-text">Tuyển tập những bài hát yêu thích của bạn</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="#" alt="Playlist">
                    <div class="card-title">Gần đây</div>
                    <div class="card-text">Những bài hát bạn nghe gần đây</div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title">Dành cho bạn</h2>
            <a href="#" style="color: var(--text-secondary); text-decoration: none; font-size: 14px;">XEM TẤT
                CẢ</a>
        </div>

        <div class="row mb-5">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=160&width=160" alt="Album">
                    <div class="card-title">Top Hits Việt Nam</div>
                    <div class="card-text">Sơn Tùng, Hòa Minzy, Bích Phương...</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=160&width=160" alt="Album">
                    <div class="card-title">K-Pop Hits</div>
                    <div class="card-text">BTS, BLACKPINK, TWICE...</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=160&width=160" alt="Album">
                    <div class="card-title">US-UK Trending</div>
                    <div class="card-text">Taylor Swift, The Weeknd, Billie Eilish...</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=160&width=160" alt="Album">
                    <div class="card-title">Acoustic Chill</div>
                    <div class="card-text">Nhạc acoustic nhẹ nhàng, thư giãn</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=160&width=160" alt="Album">
                    <div class="card-title">Workout Mix</div>
                    <div class="card-text">Năng lượng cho buổi tập của bạn</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=160&width=160" alt="Album">
                    <div class="card-title">Nhạc Trữ Tình</div>
                    <div class="card-text">Những bài hát trữ tình hay nhất</div>
                </div>
            </div>
        </div>

        <h2 class="section-title">Thể loại</h2>
        <div class="mb-4">
            <div class="category-pill active">Tất cả</div>
            <div class="category-pill">Nhạc Việt</div>
            <div class="category-pill">US-UK</div>
            <div class="category-pill">K-Pop</div>
            <div class="category-pill">Rap</div>
            <div class="category-pill">R&B</div>
            <div class="category-pill">EDM</div>
            <div class="category-pill">Acoustic</div>
            <div class="category-pill">Indie</div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: linear-gradient(149deg, #450af5, #c4efd9);">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 120px;">Pop</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: linear-gradient(149deg, #ff4632, #ffae00);">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 120px;">Hip-Hop</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: linear-gradient(149deg, #e8115b, #d138a1);">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 120px;">Rock</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: linear-gradient(149deg, #148a08, #25e33a);">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 120px;">Electronic</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: linear-gradient(149deg, #5f75ee, #b1e3ff);">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 120px;">Jazz</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: linear-gradient(149deg, #777777, #eeeeee);">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 120px;">Classical</h3>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title">Nghệ sĩ nổi bật</h2>
            <a href="#" style="color: var(--text-secondary); text-decoration: none; font-size: 14px;">XEM TẤT
                CẢ</a>
        </div>

        <div class="row mb-5">
            @foreach ($artists as $artist)
                <x-artist src="{{ $artist->cloudinary_upload->url }}"
                    href="/artist/{{ $artist->slug }}">
                    {{ $artist->name }}
                </x-artist>
            @endforeach
        </div>
    </div>
@endsection
@push('header')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
