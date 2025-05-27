<div class="top-bar">
    <div class="search-container">
        <i class="bi bi-search search-icon" id="searchButton"></i>
        <input type="text" class="search-input" placeholder="Bạn muốn nghe gì?" id="searchInput">
        <button class="clear-search" id="clearSearch">
            <i class="bi bi-x-circle-fill"></i>
        </button>
    </div>
    <div class="d-none">
        <form action="{{ route('session.search') }}" method="POST" id="formSearch">
            @csrf
            <input type="text" name="search" id="searchValue">
        </form>
    </div>

    <div class="d-flex mx-5">
        <div class="notification">
            <div class="user-avatar mt-1">
                <i class="bi bi-bell"></i>
            </div>
        </div>
        @auth
            <div class="user-menu me-2">
                <div class="user-avatar">
                    <i class="bi bi-box-arrow-right"></i>
                </div>
                <span>
                    <form action={{ route('session.destroy') }} method="POST">
                        @csrf
                        <button class="btn btn-link text-light text-decoration-none p-0 me-2" type="submit">
                            Đăng xuất
                        </button>
                    </form>
                </span>
            </div>
        @endauth
        <div class="user-menu">
            <div class="user-avatar">
                <i class="bi bi-person"></i>
            </div>
            <span>
                <a href={{ route('session.show') }} class="text-light text-decoration-none">
                    {{ $slot }}
                </a>
            </span>
        </div>
    </div>
</div>
<script>
    let searchInput = document.getElementById('searchInput');
    let clearSearch = document.getElementById('clearSearch');
    let searchButton = document.getElementById('searchButton');
    let searchValue = document.getElementById('searchValue');

    searchInput.addEventListener('input', function(this) {
        console.log(this.value);
    });

    searchButton.addEventListener('click', function() {
        document.getElementById('formSearch').submit();
    });
</script>
