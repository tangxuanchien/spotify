<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Stream - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/image') }}">
</head>
<body>
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        <div class="top-bar">
            <div class="nav-buttons">
                <div class="nav-btn">
                    <i class="bi bi-chevron-left"></i>
                </div>
                <div class="nav-btn">
                    <i class="bi bi-chevron-right"></i>
                </div>
            </div>
            <div class="user-menu">
                <div class="user-avatar">
                    <i class="bi bi-person"></i>
                </div>
                <span>tangxchien</span>
                <i class="bi bi-caret-down-fill ms-2"></i>
            </div>
        </div>

        <h1 class="section-title">Chào buổi tối</h1>

        <div class="row mb-5">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="{{asset('assets/images/playlists/hot-hit-vn.jpg')}}" alt="Playlist">
                    <div class="card-title">Nhạc Việt Hot</div>
                    <div class="card-text">Những bài hát Việt Nam thịnh hành nhất hiện nay</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="{{asset('assets/images/playlists/hiphop-viet.jpg')}}" alt="Playlist">
                    <div class="card-title">Chill & Relax</div>
                    <div class="card-text">Thư giãn với những giai điệu nhẹ nhàng</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="{{asset('assets/images/playlists/anh-hao-nhac-viet.jpg')}}" alt="Playlist">
                    <div class="card-title">Bài hát đã thích</div>
                    <div class="card-text">Tuyển tập những bài hát yêu thích của bạn</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="{{asset('assets/images/playlists/indie.jpg')}}" alt="Playlist">
                    <div class="card-title">Gần đây</div>
                    <div class="card-text">Những bài hát bạn nghe gần đây</div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title">Dành cho bạn</h2>
            <a href="#" style="color: var(--text-secondary); text-decoration: none; font-size: 14px;">XEM TẤT CẢ</a>
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
            <a href="#" style="color: var(--text-secondary); text-decoration: none; font-size: 14px;">XEM TẤT CẢ</a>
        </div>

        <div class="row mb-5">
            <x-artist src="{{ asset('assets/images/artists/sontung.jpg') }}">Sơn Tùng M-TP</x-artist>
            <x-artist src="{{ asset('assets/images/artists/hoaminzy.jpg') }}">Hòa Minzy</x-artist>
            <x-artist src="{{ asset('assets/images/artists/drt.jpg') }}">Dangrangto</x-artist>
            <x-artist src="{{ asset('assets/images/artists/hth.jpg') }}">HIEUTHUHAI</x-artist>
            <x-artist src="{{ asset('assets/images/artists/amee.jpg') }}">Amee</x-artist>
            <x-artist src="{{ asset('assets/images/artists/chipu.jpg') }}">Chi Pu</x-artist>
        </div>
    </div>

    <!-- Player Bar -->
    @include('layouts.playerbar')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
