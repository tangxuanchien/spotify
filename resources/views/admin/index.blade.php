@extends('layouts.admin.layout')
@section('title', 'Quản trị Spotify')
@section('content')
    <div class="admin-content">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-title">Tổng người dùng</div>
                    <div class="stat-icon users">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
                <div class="stat-value">8,459</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i>
                    <span>+12.5% so với tháng trước</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-title">Tổng bài hát</div>
                    <div class="stat-icon songs">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>
                </div>
                <div class="stat-value">1,234</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i>
                    <span>+8.2% so với tháng trước</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-title">Doanh thu tháng</div>
                    <div class="stat-icon revenue">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                </div>
                <div class="stat-value">$45,678</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i>
                    <span>+15.3% so với tháng trước</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-title">Lượt phát hôm nay</div>
                    <div class="stat-icon plays">
                        <i class="bi bi-play-circle"></i>
                    </div>
                </div>
                <div class="stat-value">156,789</div>
                <div class="stat-change negative">
                    <i class="bi bi-arrow-down"></i>
                    <span>-2.1% so với hôm qua</span>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="section-header">
            <h2 class="section-title">Thao tác nhanh</h2>
        </div>

        <div class="quick-actions">
            <a href="#" class="quick-action-card">
                <div class="quick-action-icon">
                    <i class="bi bi-plus-circle"></i>
                </div>
                <div class="quick-action-title">Thêm bài hát</div>
                <div class="quick-action-desc">Upload bài hát mới</div>
            </a>

            <a href="#" class="quick-action-card">
                <div class="quick-action-icon">
                    <i class="bi bi-person-plus"></i>
                </div>
                <div class="quick-action-title">Thêm nghệ sĩ</div>
                <div class="quick-action-desc">Tạo hồ sơ nghệ sĩ</div>
            </a>

            <a href="#" class="quick-action-card">
                <div class="quick-action-icon">
                    <i class="bi bi-collection"></i>
                </div>
                <div class="quick-action-title">Tạo album</div>
                <div class="quick-action-desc">Tạo album mới</div>
            </a>

            <a href="#" class="quick-action-card">
                <div class="quick-action-icon">
                    <i class="bi bi-megaphone"></i>
                </div>
                <div class="quick-action-title">Quảng cáo</div>
                <div class="quick-action-desc">Tạo chiến dịch mới</div>
            </a>
        </div>

        <!-- Analytics Chart -->
        <div class="section-header">
            <h2 class="section-title">Thống kê lượt nghe</h2>
        </div>

        <div class="chart-container">
            <div class="chart-placeholder">
                <i class="bi bi-bar-chart"></i>
                <span style="margin-left: 12px;">Biểu đồ thống kê sẽ hiển thị ở đây</span>
            </div>
        </div>

        <!-- Recent Users Table -->
        <div class="section-header">
            <h2 class="section-title">Người dùng mới</h2>
            <button class="btn btn-primary btn-sm">Xem tất cả</button>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Người dùng</th>
                        <th>Email</th>
                        <th>Ngày đăng ký</th>
                        <th>Gói</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/placeholder.svg?height=32&width=32" alt="User" class="user-avatar-small">
                                <div>
                                    <div style="font-weight: 600;">Nguyễn Văn A</div>
                                    <div style="font-size: 12px; color: var(--text-secondary);">ID: #12345</div>
                                </div>
                            </div>
                        </td>
                        <td>nguyenvana@email.com</td>
                        <td>15/12/2023</td>
                        <td><span class="status-badge status-active">Premium</span></td>
                        <td><span class="status-badge status-active">Hoạt động</span></td>
                        <td>
                            <button class="action-btn" title="Xem chi tiết">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button class="action-btn" title="Chỉnh sửa">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="action-btn danger" title="Xóa">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/placeholder.svg?height=32&width=32" alt="User" class="user-avatar-small">
                                <div>
                                    <div style="font-weight: 600;">Trần Thị B</div>
                                    <div style="font-size: 12px; color: var(--text-secondary);">ID: #12346</div>
                                </div>
                            </div>
                        </td>
                        <td>tranthib@email.com</td>
                        <td>14/12/2023</td>
                        <td><span class="status-badge status-pending">Free</span></td>
                        <td><span class="status-badge status-active">Hoạt động</span></td>
                        <td>
                            <button class="action-btn" title="Xem chi tiết">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button class="action-btn" title="Chỉnh sửa">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="action-btn danger" title="Xóa">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/placeholder.svg?height=32&width=32" alt="User" class="user-avatar-small">
                                <div>
                                    <div style="font-weight: 600;">Lê Văn C</div>
                                    <div style="font-size: 12px; color: var(--text-secondary);">ID: #12347</div>
                                </div>
                            </div>
                        </td>
                        <td>levanc@email.com</td>
                        <td>13/12/2023</td>
                        <td><span class="status-badge status-active">Premium</span></td>
                        <td><span class="status-badge status-inactive">Tạm khóa</span></td>
                        <td>
                            <button class="action-btn" title="Xem chi tiết">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button class="action-btn" title="Chỉnh sửa">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="action-btn danger" title="Xóa">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/placeholder.svg?height=32&width=32" alt="User" class="user-avatar-small">
                                <div>
                                    <div style="font-weight: 600;">Phạm Thị D</div>
                                    <div style="font-size: 12px; color: var(--text-secondary);">ID: #12348</div>
                                </div>
                            </div>
                        </td>
                        <td>phamthid@email.com</td>
                        <td>12/12/2023</td>
                        <td><span class="status-badge status-pending">Free</span></td>
                        <td><span class="status-badge status-pending">Chờ xác thực</span></td>
                        <td>
                            <button class="action-btn" title="Xem chi tiết">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button class="action-btn" title="Chỉnh sửa">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="action-btn danger" title="Xóa">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Recent Activity -->
        <div class="section-header">
            <h2 class="section-title">Hoạt động gần đây</h2>
        </div>

        <div class="chart-container">
            <div class="row">
                <div class="col-md-6">
                    <h6 style="color: var(--text-secondary); margin-bottom: 16px;">BÀI HÁT PHỔ BIẾN</h6>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Có Chắc Yêu Là Đây - Sơn Tùng M-TP</span>
                            <span style="color: var(--text-secondary);">12,456 lượt</span>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" style="width: 85%; background-color: var(--accent);"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Chúng Ta Của Hiện Tại - Sơn Tùng M-TP</span>
                            <span style="color: var(--text-secondary);">9,876 lượt</span>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" style="width: 68%; background-color: var(--accent);"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Muộn Rồi Mà Sao Còn - Sơn Tùng M-TP</span>
                            <span style="color: var(--text-secondary);">8,234 lượt</span>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" style="width: 56%; background-color: var(--accent);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6 style="color: var(--text-secondary); margin-bottom: 16px;">NGHỆ SĨ HOT</h6>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Sơn Tùng M-TP</span>
                            <span style="color: var(--text-secondary);">45,678 người nghe</span>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" style="width: 92%; background-color: var(--info);"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Hòa Minzy</span>
                            <span style="color: var(--text-secondary);">32,456 người nghe</span>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" style="width: 71%; background-color: var(--info);"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Bích Phương</span>
                            <span style="color: var(--text-secondary);">28,123 người nghe</span>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" style="width: 62%; background-color: var(--info);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
