<div class="admin-sidebar">
    <div class="admin-logo">Spotify</div>
    <div class="admin-subtitle">Bảng điều khiển quản trị</div>

    <div class="admin-nav-section">
        <div class="admin-nav-title">Tổng quan</div>
        <a href={{ route('admin.index') }}
        class='{{ request()->is('admin') ? 'admin-nav-link active' : 'admin-nav-link' }}'>
            <i class="bi bi-speedometer2"></i>
            <span>Bảng điều khiển</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-graph-up"></i>
            <span>Thống kê</span>
        </a>
    </div>

    <div class="admin-nav-section">
        <div class="admin-nav-title">Quản lý nội dung</div>
        <a href={{ route('admin.songs.index') }}
            class='{{ request()->is('admin/songs*') ? 'admin-nav-link active' : 'admin-nav-link' }}'>
            <i class="bi bi-music-note-beamed"></i>
            <span>Bài hát</span>
            <span class="badge">1,234</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-person-circle"></i>
            <span>Nghệ sĩ</span>
            <span class="badge">156</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-disc"></i>
            <span>Album</span>
            <span class="badge">89</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-collection-play"></i>
            <span>Playlist</span>
            <span class="badge">45</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-tags"></i>
            <span>Thể loại</span>
        </a>
    </div>

    <div class="admin-nav-section">
        <div class="admin-nav-title">Người dùng</div>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-people"></i>
            <span>Tất cả người dùng</span>
            <span class="badge">8,459</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-star"></i>
            <span>Premium</span>
            <span class="badge">2,341</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-exclamation-triangle"></i>
            <span>Báo cáo</span>
            <span class="badge bg-danger">12</span>
        </a>
    </div>

    <div class="admin-nav-section">
        <div class="admin-nav-title">Hệ thống</div>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-gear"></i>
            <span>Cài đặt</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-shield-check"></i>
            <span>Bảo mật</span>
        </a>
        <a href="#" class="admin-nav-link">
            <i class="bi bi-file-earmark-text"></i>
            <span>Logs</span>
        </a>
    </div>
</div>
