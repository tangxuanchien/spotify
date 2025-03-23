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
    <div class="sidebar">
        <div class="logo">Spotify</div>
        <a href="#" class="sidebar-link active">
            <i class="bi bi-house-door-fill"></i>
            <span>Trang chủ</span>
        </a>
        <a href="#" class="sidebar-link">
            <i class="bi bi-search"></i>
            <span>Tìm kiếm</span>
        </a>
        <a href="#" class="sidebar-link">
            <i class="bi bi-collection"></i>
            <span>Thư viện</span>
        </a>
        <div class="divider"></div>
        <a href="#" class="sidebar-link">
            <i class="bi bi-plus-square"></i>
            <span>Tạo playlist</span>
        </a>
        <a href="#" class="sidebar-link">
            <i class="bi bi-heart"></i>
            <span>Bài hát đã thích</span>
        </a>
        <div class="divider"></div>
        <div style="padding: 0 12px; color: var(--text-secondary); font-size: 14px; margin-bottom: 16px;">Playlist</div>
        <a href="#" class="sidebar-link">
            <span>Nhạc Việt Hot</span>
        </a>
        <a href="#" class="sidebar-link">
            <span>Top Hits 2023</span>
        </a>
        <a href="#" class="sidebar-link">
            <span>Chill & Relax</span>
        </a>
        <a href="#" class="sidebar-link">
            <span>Workout Mix</span>
        </a>
        <a href="#" class="sidebar-link">
            <span>K-Pop Hits</span>
        </a>
    </div>

    <x-sidebar>
        <x-slot:logo_name>Spotify</x-slot:logo_name>
    </x-sidebar>

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
                <span>User</span>
                <i class="bi bi-caret-down-fill ms-2"></i>
            </div>
        </div>

        <h1 class="section-title">Chào buổi tối</h1>

        <div class="row mb-5">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=180&width=180" alt="Playlist">
                    <div class="card-title">Nhạc Việt Hot</div>
                    <div class="card-text">Những bài hát Việt Nam thịnh hành nhất hiện nay</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=180&width=180" alt="Playlist">
                    <div class="card-title">Chill & Relax</div>
                    <div class="card-text">Thư giãn với những giai điệu nhẹ nhàng</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=180&width=180" alt="Playlist">
                    <div class="card-title">Bài hát đã thích</div>
                    <div class="card-text">Tuyển tập những bài hát yêu thích của bạn</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="/placeholder.svg?height=180&width=180" alt="Playlist">
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
            <x-artist src="{{ asset('assets/images/sontung.jpg') }}">Sơn Tùng M-TP</x-artist>
            <x-artist src="{{ asset('assets/images/hoaminzy.jpg') }}">Hòa Minzy</x-artist>
            <x-artist src="{{ asset('assets/images/drt.jpg') }}">Dangrangto</x-artist>
            <x-artist src="{{ asset('assets/images/hth.jpg') }}">HIEUTHUHAI</x-artist>
            <x-artist src="{{ asset('assets/images/amee.jpg') }}">Amee</x-artist>
            <x-artist src="{{ asset('assets/images/chipu.jpg') }}">Chi Pu</x-artist>
        </div>
    </div>

    <!-- Player Bar -->
    <div class="player-bar">
        <div class="now-playing">
            <img src="/placeholder.svg?height=56&width=56" alt="Now Playing">
            <div class="track-info">
                <div class="track-name">Có Chắc Yêu Là Đây</div>
                <div class="artist-name">Sơn Tùng M-TP</div>
            </div>
            <i class="bi bi-heart ms-3" style="color: var(--text-secondary); cursor: pointer;"></i>
        </div>

        <div class="player-controls">
            <div class="control-buttons">
                <i class="bi bi-shuffle control-btn"></i>
                <i class="bi bi-skip-start-fill control-btn"></i>
                <i class="bi bi-play-circle-fill control-btn main"></i>
                <i class="bi bi-skip-end-fill control-btn"></i>
                <i class="bi bi-repeat control-btn"></i>
            </div>
            <div class="progress-container">
                <div class="progress-time">1:23</div>
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
                <div class="progress-time">3:45</div>
            </div>
        </div>

        <div class="volume-controls">
            <i class="bi bi-volume-up volume-icon"></i>
            <div class="volume-bar">
                <div class="volume"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
