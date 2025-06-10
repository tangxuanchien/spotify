@extends('layouts.admin.layout')
@section('title', 'Xem bài hát')
@section('content')
    <div class="admin-content">
        <div class="artist-details-container">
            <div class="artist-header">
                <div class="artist-photo">
                    <img src="{{$artist->cloudinary_upload->url}}" alt="Artist Photo">
                </div>

                <div class="artist-info">
                    <div class="artist-meta">
                        <div class="artist-type">Nghệ sĩ</div>
                        <h2 class="artist-name">{{$artist->name}}</h2>
                        <div class="artist-genre">V-Pop, Pop</div>
                        <div class="artist-details">
                            <span><i class="bi bi-calendar3"></i> Hoạt động từ 2012</span>
                            <span><i class="bi bi-geo-alt"></i> Việt Nam</span>
                            <span><span class="status-badge status-verified">Đã xác minh</span></span>
                            <span><span class="status-badge status-active">Hoạt động</span></span>
                        </div>

                        <div class="artist-social">
                            <a href="#" class="social-link" title="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-link" title="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-link" title="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a href="#" class="social-link" title="TikTok">
                                <i class="bi bi-tiktok"></i>
                            </a>
                            <a href="#" class="social-link" title="Website">
                                <i class="bi bi-globe"></i>
                            </a>
                        </div>
                    </div>

                    <div class="artist-actions">
                        <button class="btn btn-primary">
                            <i class="bi bi-pencil"></i> Chỉnh sửa
                        </button>
                        <button class="btn btn-secondary">
                            <i class="bi bi-eye"></i> Xem trang nghệ sĩ
                        </button>
                        <button class="btn btn-secondary">
                            <i class="bi bi-plus-circle"></i> Thêm bài hát
                        </button>
                        <button class="btn btn-danger">
                            <i class="bi bi-trash"></i> Xóa nghệ sĩ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-title">Người theo dõi</div>
                        <div class="stat-icon followers">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                    <div class="stat-value">{{$artist->followers}}</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+15.2% so với tháng trước</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-title">Tổng bài hát</div>
                        <div class="stat-icon songs">
                            <i class="bi bi-music-note-beamed"></i>
                        </div>
                    </div>
                    <div class="stat-value">45</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+3 bài hát mới</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-title">Album</div>
                        <div class="stat-icon albums">
                            <i class="bi bi-disc"></i>
                        </div>
                    </div>
                    <div class="stat-value">8</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+1 album mới</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-title">Lượt nghe tháng</div>
                        <div class="stat-icon plays">
                            <i class="bi bi-play-circle"></i>
                        </div>
                    </div>
                    <div class="stat-value">{{$artist->monthly_listeners}}</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+8.3% so với tháng trước</span>
                    </div>
                </div>
            </div>

            <!-- Tabs for Details -->
            <div class="details-tabs">
                <ul class="nav nav-tabs" id="artistDetailsTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                            type="button" role="tab" aria-controls="info" aria-selected="true">Thông tin</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="songs-tab" data-bs-toggle="tab" data-bs-target="#songs" type="button"
                            role="tab" aria-controls="songs" aria-selected="false">Bài hát
                            phổ biến</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="albums-tab" data-bs-toggle="tab" data-bs-target="#albums"
                            type="button" role="tab" aria-controls="albums"
                            aria-selected="false">Discography</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="analytics-tab" data-bs-toggle="tab" data-bs-target="#analytics"
                            type="button" role="tab" aria-controls="analytics" aria-selected="false">Phân
                            tích</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history"
                            type="button" role="tab" aria-controls="history" aria-selected="false">Lịch
                            sử</button>
                    </li>
                </ul>

                <div class="tab-content" id="artistDetailsTabsContent">
                    <!-- Info Tab -->
                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="info-row">
                            <div class="info-label">ID</div>
                            <div class="info-value">#{{$artist->id}}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Tên nghệ sĩ</div>
                            <div class="info-value">Sơn Tùng M-TP</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Tên thật</div>
                            <div class="info-value">Nguyễn Thanh Tùng</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Ngày sinh</div>
                            <div class="info-value">5 tháng 7, 1994</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Quốc tịch</div>
                            <div class="info-value">Việt Nam</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Thể loại</div>
                            <div class="info-value">V-Pop, Pop, R&B</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Hoạt động từ</div>
                            <div class="info-value">2012 - hiện tại</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Công ty</div>
                            <div class="info-value">M-TP Entertainment</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Email liên hệ</div>
                            <div class="info-value">contact@sontungmtp.com</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Số điện thoại</div>
                            <div class="info-value">+84 xxx xxx xxx</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Ngày tham gia</div>
                            <div class="info-value">{{$artist->created_at}}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Cập nhật lần cuối</div>
                            <div class="info-value">{{$artist->updated_at}}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Trạng thái</div>
                            <div class="info-value">
                                <span class="status-badge status-verified">Đã xác minh</span>
                                <span class="status-badge status-active">Hoạt động</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Tiểu sử</div>
                            <div class="info-value">
                                {{$artist->description}}
                            </div>
                        </div>
                    </div>

                    <!-- Popular Songs Tab -->
                    <div class="tab-pane fade" id="songs" role="tabpanel" aria-labelledby="songs-tab">
                        <div class="song-item">
                            <div class="song-number">1</div>
                            <img src="/placeholder.svg?height=48&width=48" alt="Song Cover" class="song-cover">
                            <div class="song-info">
                                <div class="song-title">Có Chắc Yêu Là Đây</div>
                                <div class="song-meta">Single • 2020</div>
                            </div>
                            <div class="song-stats">
                                <span><i class="bi bi-play-circle"></i> 1.2M</span>
                                <span><i class="bi bi-heart"></i> 87K</span>
                                <span>3:52</span>
                            </div>
                        </div>

                        <div class="song-item">
                            <div class="song-number">2</div>
                            <img src="/placeholder.svg?height=48&width=48" alt="Song Cover" class="song-cover">
                            <div class="song-info">
                                <div class="song-title">Chúng Ta Của Hiện Tại</div>
                                <div class="song-meta">Single • 2018</div>
                            </div>
                            <div class="song-stats">
                                <span><i class="bi bi-play-circle"></i> 980K</span>
                                <span><i class="bi bi-heart"></i> 65K</span>
                                <span>4:15</span>
                            </div>
                        </div>

                        <div class="song-item">
                            <div class="song-number">3</div>
                            <img src="/placeholder.svg?height=48&width=48" alt="Song Cover" class="song-cover">
                            <div class="song-info">
                                <div class="song-title">Muộn Rồi Mà Sao Còn</div>
                                <div class="song-meta">Single • 2019</div>
                            </div>
                            <div class="song-stats">
                                <span><i class="bi bi-play-circle"></i> 823K</span>
                                <span><i class="bi bi-heart"></i> 54K</span>
                                <span>3:28</span>
                            </div>
                        </div>

                        <div class="song-item">
                            <div class="song-number">4</div>
                            <img src="/placeholder.svg?height=48&width=48" alt="Song Cover" class="song-cover">
                            <div class="song-info">
                                <div class="song-title">Lạc Trôi</div>
                                <div class="song-meta">Single • 2017</div>
                            </div>
                            <div class="song-stats">
                                <span><i class="bi bi-play-circle"></i> 756K</span>
                                <span><i class="bi bi-heart"></i> 48K</span>
                                <span>4:02</span>
                            </div>
                        </div>

                        <div class="song-item">
                            <div class="song-number">5</div>
                            <img src="/placeholder.svg?height=48&width=48" alt="Song Cover" class="song-cover">
                            <div class="song-info">
                                <div class="song-title">Nơi Này Có Anh</div>
                                <div class="song-meta">Single • 2018</div>
                            </div>
                            <div class="song-stats">
                                <span><i class="bi bi-play-circle"></i> 689K</span>
                                <span><i class="bi bi-heart"></i> 42K</span>
                                <span>3:45</span>
                            </div>
                        </div>
                    </div>

                    <!-- Albums Tab -->
                    <div class="tab-pane fade" id="albums" role="tabpanel" aria-labelledby="albums-tab">
                        <div class="album-item">
                            <img src="/placeholder.svg?height=80&width=80" alt="Album Cover" class="album-cover">
                            <div class="album-info">
                                <div class="album-title">m-tp M-TP</div>
                                <div class="album-meta">Album • 2017 • 10 bài hát</div>
                                <div class="album-stats">
                                    <span><i class="bi bi-play-circle"></i> 5.2M lượt nghe</span>
                                    <span><i class="bi bi-heart"></i> 234K lượt thích</span>
                                    <span><i class="bi bi-download"></i> 89K lượt tải</span>
                                </div>
                            </div>
                        </div>

                        <div class="album-item">
                            <img src="/placeholder.svg?height=80&width=80" alt="Album Cover" class="album-cover">
                            <div class="album-info">
                                <div class="album-title">Sky Tour</div>
                                <div class="album-meta">Live Album • 2019 • 15 bài hát</div>
                                <div class="album-stats">
                                    <span><i class="bi bi-play-circle"></i> 3.8M lượt nghe</span>
                                    <span><i class="bi bi-heart"></i> 156K lượt thích</span>
                                    <span><i class="bi bi-download"></i> 67K lượt tải</span>
                                </div>
                            </div>
                        </div>

                        <div class="album-item">
                            <img src="/placeholder.svg?height=80&width=80" alt="Album Cover" class="album-cover">
                            <div class="album-info">
                                <div class="album-title">99%</div>
                                <div class="album-meta">EP • 2022 • 6 bài hát</div>
                                <div class="album-stats">
                                    <span><i class="bi bi-play-circle"></i> 2.1M lượt nghe</span>
                                    <span><i class="bi bi-heart"></i> 98K lượt thích</span>
                                    <span><i class="bi bi-download"></i> 45K lượt tải</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Analytics Tab -->
                    <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
                        <div class="chart-container">
                            <div class="chart-placeholder">
                                <i class="bi bi-bar-chart"></i>
                                <span style="margin-left: 12px;">Biểu đồ lượt nghe theo thời gian</span>
                            </div>
                        </div>

                        <h5 class="mb-3">Phân bố người nghe</h5>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h6 style="color: var(--text-secondary); margin-bottom: 16px;">THEO QUỐC GIA</h6>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Việt Nam</span>
                                        <span style="color: var(--text-secondary);">68%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 68%; background-color: var(--accent);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Hoa Kỳ</span>
                                        <span style="color: var(--text-secondary);">15%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 15%; background-color: var(--accent);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Hàn Quốc</span>
                                        <span style="color: var(--text-secondary);">8%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 8%; background-color: var(--accent);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Nhật Bản</span>
                                        <span style="color: var(--text-secondary);">5%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 5%; background-color: var(--accent);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 style="color: var(--text-secondary); margin-bottom: 16px;">THEO ĐỘ TUỔI</h6>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>18-24</span>
                                        <span style="color: var(--text-secondary);">42%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 42%; background-color: var(--info);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>25-34</span>
                                        <span style="color: var(--text-secondary);">35%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 35%; background-color: var(--info);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>35-44</span>
                                        <span style="color: var(--text-secondary);">15%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 15%; background-color: var(--info);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>45+</span>
                                        <span style="color: var(--text-secondary);">8%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 8%; background-color: var(--info);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="mb-3">Top bài hát theo lượt nghe</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Có Chắc Yêu Là Đây</span>
                                        <span style="color: var(--text-secondary);">1.2M lượt</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 85%; background-color: var(--warning);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Chúng Ta Của Hiện Tại</span>
                                        <span style="color: var(--text-secondary);">980K lượt</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 70%; background-color: var(--warning);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Muộn Rồi Mà Sao Còn</span>
                                        <span style="color: var(--text-secondary);">823K lượt</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 58%; background-color: var(--warning);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Lạc Trôi</span>
                                        <span style="color: var(--text-secondary);">756K lượt</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 54%; background-color: var(--warning);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- History Tab -->
                    <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Nghệ sĩ được thêm vào hệ thống</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 15/03/2015, 2:30 PM</span>
                                    <span><i class="bi bi-person"></i> Admin</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-patch-check"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Tài khoản được xác minh</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 20/03/2015, 10:15 AM</span>
                                    <span><i class="bi bi-person"></i> Verification Team</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-music-note"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Phát hành single đầu tiên "Cơn mưa ngang qua"</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 25/03/2015, 6:00 PM</span>
                                    <span><i class="bi bi-person"></i> Content Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Đạt 1 triệu người theo dõi</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 15/08/2017, 3:45 PM</span>
                                    <span><i class="bi bi-graph-up"></i> Tự động</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-disc"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Phát hành album "m-tp M-TP"</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 26/07/2017, 12:00 PM</span>
                                    <span><i class="bi bi-person"></i> Content Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Nhận giải "Nghệ sĩ của năm"</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 12/12/2019, 8:00 PM</span>
                                    <span><i class="bi bi-person"></i> Awards Committee</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-pencil"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Cập nhật thông tin nghệ sĩ</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 22/11/2023, 10:45 AM</span>
                                    <span><i class="bi bi-person"></i> Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
