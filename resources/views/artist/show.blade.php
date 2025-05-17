<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Profile - Music Stream</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/artist.css') }}">
</head>

<body>
    @include('layouts.sidebar')
    @include('layouts.playerbar')
    <!-- Main Content -->
    <div class="main-content">
        <x-topbar>Đăng nhập</x-topbar>

        <!-- Artist Header -->
        <div class="artist-header">
            <div class="artist-info">
                <div class="verified-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>Nghệ sĩ đã xác minh</span>
                </div>
                <h1 class="artist-name-header">{{ $artist['name'] }}</h1>
                <div class="artist-stats">
                    <span>{{ number_format($artist['monthly_listeners'], 0, '.', '.') }} người nghe hàng tháng</span>
                </div>
                <div class="artist-actions">
                    <button class="btn-play">
                        <i class="bi bi-play-fill"></i>
                    </button>
                    <button class="btn-follow">THEO DÕI</button>
                    <button class="btn-more">
                        <i class="bi bi-three-dots"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Content Navigation -->
        <div class="content-nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tổng quan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bài hát</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nghệ sĩ tương tự</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
            </ul>
        </div>

        <!-- Artist Content -->
        <div class="artist-content">
            <!-- Popular Tracks Section -->
            <div class="popular-tracks">
                <h2 class="section-title">Phổ biến</h2>

                <!-- Track List -->
                <div class="track-list">
                    <!-- Track 1 -->
                    <div class="track-row">
                        <div class="track-number">1</div>
                        <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                        <img src="/placeholder.svg?height=40&width=40" alt="Track" class="track-image">
                        <div class="track-details">
                            <div class="track-title">Có Chắc Yêu Là Đây</div>
                            <div class="track-album">Single • 2020</div>
                        </div>
                        <div class="track-duration">3:52</div>
                        <div class="track-actions">
                            <button class="track-action-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="track-action-btn">
                                <i class="bi bi-three-dots"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Track 2 -->
                    <div class="track-row">
                        <div class="track-number">2</div>
                        <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                        <img src="/placeholder.svg?height=40&width=40" alt="Track" class="track-image">
                        <div class="track-details">
                            <div class="track-title">Chúng Ta Của Hiện Tại</div>
                            <div class="track-album">Single • 2021</div>
                        </div>
                        <div class="track-duration">4:05</div>
                        <div class="track-actions">
                            <button class="track-action-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="track-action-btn">
                                <i class="bi bi-three-dots"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Track 3 -->
                    <div class="track-row">
                        <div class="track-number">3</div>
                        <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                        <img src="/placeholder.svg?height=40&width=40" alt="Track" class="track-image">
                        <div class="track-details">
                            <div class="track-title">Muộn Rồi Mà Sao Còn</div>
                            <div class="track-album">Single • 2021</div>
                        </div>
                        <div class="track-duration">4:35</div>
                        <div class="track-actions">
                            <button class="track-action-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="track-action-btn">
                                <i class="bi bi-three-dots"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Track 4 -->
                    <div class="track-row">
                        <div class="track-number">4</div>
                        <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                        <img src="/placeholder.svg?height=40&width=40" alt="Track" class="track-image">
                        <div class="track-details">
                            <div class="track-title">Lạc Trôi</div>
                            <div class="track-album">m-tp M-TP • 2017</div>
                        </div>
                        <div class="track-duration">4:12</div>
                        <div class="track-actions">
                            <button class="track-action-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="track-action-btn">
                                <i class="bi bi-three-dots"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Track 5 -->
                    <div class="track-row">
                        <div class="track-number">5</div>
                        <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                        <img src="/placeholder.svg?height=40&width=40" alt="Track" class="track-image">
                        <div class="track-details">
                            <div class="track-title">Chạy Ngay Đi</div>
                            <div class="track-album">Single • 2018</div>
                        </div>
                        <div class="track-duration">4:08</div>
                        <div class="track-actions">
                            <button class="track-action-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="track-action-btn">
                                <i class="bi bi-three-dots"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn-follow">XEM THÊM</button>
                </div>
            </div>

            <!-- Discography Section -->
            <div class="discography-section">
                <h2 class="section-title">Đĩa nhạc</h2>
                <div class="discography-nav">
                    <button class="discography-nav-item active">Tất cả</button>
                    <button class="discography-nav-item">Album</button>
                    <button class="discography-nav-item">Single & EP</button>
                </div>

                <div class="row">
                    <!-- Album 1 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="/placeholder.svg?height=180&width=180" alt="Album">
                            <div class="card-title">m-tp M-TP</div>
                            <div class="card-text">Album • 2017</div>
                        </div>
                    </div>

                    <!-- Album 2 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="/placeholder.svg?height=180&width=180" alt="Album">
                            <div class="card-title">Sky Tour</div>
                            <div class="card-text">Album • 2019</div>
                        </div>
                    </div>

                    <!-- Album 3 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="/placeholder.svg?height=180&width=180" alt="Album">
                            <div class="card-title">Chúng Ta Của Hiện Tại</div>
                            <div class="card-text">Single • 2021</div>
                        </div>
                    </div>

                    <!-- Album 4 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="/placeholder.svg?height=180&width=180" alt="Album">
                            <div class="card-title">Muộn Rồi Mà Sao Còn</div>
                            <div class="card-text">Single • 2021</div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn-follow">XEM THÊM</button>
                </div>
            </div>

            <!-- About Section -->
            <div class="about-section">
                <h2 class="section-title">Giới thiệu</h2>

                <div class="about-header">
                    <img src="{{ asset('assets/images/artists/' . $artist['image_url']) }}" alt="Artist"
                        class="about-image">
                    <div class="about-info">
                        <h3 class="about-title">{{ $artist['name'] }}</h3>
                        <div class="about-stats">
                            <div class="stat-item">
                                <div class="stat-value">{{ $monthly_listeners }}</div>
                                <div class="stat-label">Người nghe hàng tháng</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">{{ $followers }}</div>
                                <div class="stat-label">Người theo dõi</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-bio">
                    {{ $artist['description'] }}
                </div>
            </div>

            <!-- Similar Artists Section -->
            <div class="similar-artists">
                <h2 class="section-title">Nghệ sĩ tương tự</h2>

                <div class="row">
                    @foreach ($artists_related as $artist_related)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                            <div class="card text-center">
                                <img src="{{ asset('assets/images/artists/' . $artist_related['image_url']) }}"
                                    alt="Artist" style="border-radius: 50%;">
                                <div class="card-title">{{ $artist_related['name'] }}</div>
                                <div class="card-text">Nghệ sĩ</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
