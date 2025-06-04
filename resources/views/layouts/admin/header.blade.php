<div class="admin-header">
    <h1>Dashboard</h1>
    <div class="admin-header-actions">
        <button class="btn btn-outline-primary btn-sm">
            <i class="bi bi-download"></i> Xuất báo cáo
        </button>
        <div class="admin-user-menu">
            <form action={{route('admin.session.destroy')}} method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-primary">Đăng xuất</button>
            </form>
            @auth('admin')
                <div class="admin-avatar">A</div>
                <div>
                    <div style="font-size: 14px; font-weight: 600;">Admin</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Quản trị viên</div>
                </div>
                <i class="bi bi-chevron-down"></i>
            @else
                <div style="font-size: 14px; font-weight: 600;">
                    <a href={{ route('admin.session.store') }} class="text-light text-decoration-none">
                        Đăng nhập
                        <i class="bi bi-person"></i>
                    </a>
                </div>
            @endauth
        </div>
    </div>
</div>
