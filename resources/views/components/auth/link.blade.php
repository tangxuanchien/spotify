@props(['href' => '/', 'text' => ''])
<div class="auth-link">
    <p>{{ $text }} <a href={{ $href }}>{{ $slot }}</a></p>
</div>
