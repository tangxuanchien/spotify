<div class="top-bar">
    <div class="nav-buttons">
        <div class="nav-btn">
            <i class="bi bi-chevron-left"></i>
        </div>
        <div class="nav-btn">
            <i class="bi bi-chevron-right"></i>
        </div>
    </div>
    <div class="d-flex">
        @auth
            <div class="user-menu me-3">
                <span>
                    <form action={{ route('session.destroy') }} method="POST">
                        @csrf
                        <button class="btn btn-link text-light text-decoration-none p-0 ms-3 me-2" type="submit">
                            Đăng xuất
                        </button>
                        <i class="bi bi-box-arrow-right"></i>
                    </form>
                </span>
            </div>
        @endauth
        <div class="user-menu">
            <div class="user-avatar">
                <i class="bi bi-person"></i>
            </div>
            <span>
                <a href={{ route('session.show') }} class="text-light text-decoration-none">{{ $slot }}
                </a>
            </span>
            <i class="bi bi-caret-down-fill ms-2"></i>
        </div>
    </div>
</div>
