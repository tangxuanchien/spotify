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
        <span><a href={{route('login.show')}} class="text-light text-decoration-none">{{$slot}}</a></span>
        <i class="bi bi-caret-down-fill ms-2"></i>
    </div>
</div>
