@extends('layouts.admin.layout')
@section('title', 'Xem bài hát')
@section('content')
    <div class="admin-content">
        <div class="song-details-container">
            <div class="song-header">
                <div class="song-cover">
                    <img src={{ $song->cloudinary_upload->url }} alt="Song Cover">
                </div>
                <div class="song-info">
                    <div class="song-meta">
                        <div class="song-type">Bài hát</div>
                        <h2 class="song-title">{{ $song->name }}</h2>
                        <div class="song-artist">{{ $song->artist->name }}</div>
                        <div class="song-details">
                            <span><i class="bi bi-disc"></i> Single • {{ $song->release_year }}</span>
                            <span><i class="bi bi-clock"></i> {{ $song->duration }}</span>
                            <span><i class="bi bi-music-note"></i> {{ $song->genre->name }}</span>
                            <span class="status-badge {{ $song->status['color'] }}">{{ $song->status['name'] }}</span>
                        </div>
                    </div>

                    <div class="song-actions">
                        <a href={{ route('admin.songs.edit', $song->id) }} class="btn btn-primary">
                            <i class="bi bi-pencil"></i> Chỉnh sửa
                        </a>
                        <button class="btn btn-secondary">
                            <i class="bi bi-eye"></i> Xem trên trang chủ
                        </button>
                        <form action={{ route('admin.songs.pauseRelease', $song->id) }} method="POST"
                            onsubmit="return confirm('Bạn chắc chắn muốn dừng phát hành?')">
                            @csrf
                            <button class="btn btn-secondary" type="submit">
                                <i class="bi bi-pause-circle"></i> Tạm dừng phát hành
                            </button>
                        </form>
                        <form action={{ route('admin.songs.destroy', $song->id) }} method="POST"
                            onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i> Xóa bài hát
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-title">Lượt nghe</div>
                        <div class="stat-icon plays">
                            <i class="bi bi-play-circle"></i>
                        </div>
                    </div>
                    <div class="stat-value">{{ number_format($song->listens) }}</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+12.5% so với tháng trước</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-title">Lượt thích</div>
                        <div class="stat-icon likes">
                            <i class="bi bi-heart"></i>
                        </div>
                    </div>
                    <div class="stat-value">{{ number_format($song->likes) }}</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+8.2% so với tháng trước</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-title">Lượt tải</div>
                        <div class="stat-icon downloads">
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                    <div class="stat-value">34,567</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+15.3% so với tháng trước</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-title">Lượt chia sẻ</div>
                        <div class="stat-icon shares">
                            <i class="bi bi-share"></i>
                        </div>
                    </div>
                    <div class="stat-value">12,345</div>
                    <div class="stat-change negative">
                        <i class="bi bi-arrow-down"></i>
                        <span>-2.1% so với tháng trước</span>
                    </div>
                </div>
            </div>

            <!-- Tabs for Details -->
            <div class="details-tabs">
                <ul class="nav nav-tabs" id="songDetailsTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                            type="button" role="tab" aria-controls="info" aria-selected="true">Thông tin</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="lyrics-tab" data-bs-toggle="tab" data-bs-target="#lyrics"
                            type="button" role="tab" aria-controls="lyrics" aria-selected="false">Lời bài
                            hát</button>
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

                <div class="tab-content" id="songDetailsTabsContent">
                    <!-- Info Tab -->
                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="info-row">
                            <div class="info-label">ID</div>
                            <div class="info-value">#{{ $song->id }}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Tên bài hát</div>
                            <div class="info-value">{{ $song->name }}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Nghệ sĩ</div>
                            <div class="info-value">{{ $song->artist->name }}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Album</div>
                            <div class="info-value">Single</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Thể loại</div>
                            <div class="info-value">{{ $song->genre->name }}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Năm phát hành</div>
                            <div class="info-value">{{ $song->release_year }}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Thời lượng</div>
                            <div class="info-value">{{ $song->duration }}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Định dạng</div>
                            <div class="info-value">MP3</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Kích thước file</div>
                            <div class="info-value">9.2 MB</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Ngày tải lên</div>
                            <div class="info-value">{{ $song->created_at }}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Cập nhật lần cuối</div>
                            <div class="info-value">{{ $song->updated_at }}</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Trạng thái</div>
                            <div class="info-value"><span class="status-badge {{$song->status['color']}}">{{$song->status['name']}}</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Quyền truy cập</div>
                            <div class="info-value">Công khai</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Tags</div>
                            <div class="info-value">
                                <span class="tag">vpop</span>
                                <span class="tag">tình yêu</span>
                                <span class="tag">son tung mtp</span>
                                <span class="tag">hit</span>
                                <span class="tag">2020</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Mô tả</div>
                            <div class="info-value">
                                "Có Chắc Yêu Là Đây" là một sáng tác của Sơn Tùng M-TP, phát hành vào năm 2020. Bài
                                hát nhanh chóng trở thành hiện tượng âm nhạc với giai điệu bắt tai và ca từ lãng mạn
                                về tình yêu.
                            </div>
                        </div>
                    </div>

                    <!-- Lyrics Tab -->
                    <div class="tab-pane fade" id="lyrics" role="tabpanel" aria-labelledby="lyrics-tab">
                        <div class="lyrics-container">
                            Có phải em đang ở đâu đây
                            Có phải em đang nghĩ gì đây
                            Sao em không nói ra điều em đang giấu
                            Để anh được thấy

                            Có phải em đang ở một nơi
                            Có phải em đang nghĩ một người
                            Sao em không nói ra điều em đang giấu
                            Để anh được thấy

                            Vì sao em lại xoá hết tin nhắn của anh
                            Vì sao em không cho anh được gặp em
                            Vì sao em lại buông tay anh chẳng nói
                            Vì sao, vì sao, vì sao

                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này
                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này

                            Có chắc yêu là đây
                            Khi môi em hôn môi này
                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này

                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này
                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này

                            Có chắc yêu là đây
                            Khi môi em hôn môi này
                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này

                            Có phải em đang ở đâu đây
                            Có phải em đang nghĩ gì đây
                            Sao em không nói ra điều em đang giấu
                            Để anh được thấy

                            Có phải em đang ở một nơi
                            Có phải em đang nghĩ một người
                            Sao em không nói ra điều em đang giấu
                            Để anh được thấy

                            Vì sao em lại xoá hết tin nhắn của anh
                            Vì sao em không cho anh được gặp em
                            Vì sao em lại buông tay anh chẳng nói
                            Vì sao, vì sao, vì sao

                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này
                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này

                            Có chắc yêu là đây
                            Khi môi em hôn môi này
                            Có chắc yêu là đây
                            Khi em đang giữ trái tim này
                        </div>
                    </div>

                    <!-- Analytics Tab -->
                    <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
                        <div class="chart-container mb-4">
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
                                        <span style="color: var(--text-secondary);">65%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 65%; background-color: var(--accent);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Hoa Kỳ</span>
                                        <span style="color: var(--text-secondary);">12%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 12%; background-color: var(--accent);">
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
                            </div>
                            <div class="col-md-6">
                                <h6 style="color: var(--text-secondary); margin-bottom: 16px;">THEO ĐỘ TUỔI</h6>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>18-24</span>
                                        <span style="color: var(--text-secondary);">45%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 45%; background-color: var(--info);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>25-34</span>
                                        <span style="color: var(--text-secondary);">32%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 32%; background-color: var(--info);">
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
                            </div>
                        </div>

                        <h5 class="mb-3">Nguồn phát</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 style="color: var(--text-secondary); margin-bottom: 16px;">THEO THIẾT BỊ</h6>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Mobile</span>
                                        <span style="color: var(--text-secondary);">72%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 72%; background-color: var(--warning);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Desktop</span>
                                        <span style="color: var(--text-secondary);">23%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 23%; background-color: var(--warning);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Tablet</span>
                                        <span style="color: var(--text-secondary);">5%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 5%; background-color: var(--warning);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 style="color: var(--text-secondary); margin-bottom: 16px;">THEO NGUỒN</h6>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Trang chủ</span>
                                        <span style="color: var(--text-secondary);">38%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 38%; background-color: var(--danger);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Playlist</span>
                                        <span style="color: var(--text-secondary);">29%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 29%; background-color: var(--danger);">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Tìm kiếm</span>
                                        <span style="color: var(--text-secondary);">18%</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" style="width: 18%; background-color: var(--danger);">
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
                                <i class="bi bi-upload"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Bài hát được tải lên</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 15/06/2020, 10:23 AM</span>
                                    <span><i class="bi bi-person"></i> Admin</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-pencil"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Chỉnh sửa thông tin bài hát</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 18/06/2020, 2:45 PM</span>
                                    <span><i class="bi bi-person"></i> Admin</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-collection"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Thêm vào playlist "Top Hits 2020"</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 20/06/2020, 9:15 AM</span>
                                    <span><i class="bi bi-person"></i> Editor</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Đạt Top 1 Trending</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 25/06/2020, 12:00 PM</span>
                                    <span><i class="bi bi-graph-up"></i> Tự động</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-pencil"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Cập nhật lời bài hát</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 30/06/2020, 4:30 PM</span>
                                    <span><i class="bi bi-person"></i> Content Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Đạt chứng nhận Platinum</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 15/09/2020, 10:00 AM</span>
                                    <span><i class="bi bi-person"></i> Admin</span>
                                </div>
                            </div>
                        </div>

                        <div class="history-item">
                            <div class="history-icon">
                                <i class="bi bi-pencil"></i>
                            </div>
                            <div class="history-content">
                                <div class="history-title">Cập nhật thông tin bài hát</div>
                                <div class="history-meta">
                                    <span><i class="bi bi-calendar3"></i> 22/03/2023, 3:45 PM</span>
                                    <span><i class="bi bi-person"></i> Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
