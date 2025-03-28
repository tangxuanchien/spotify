<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
    <div class="card text-center">
        <img src="{{$src ?? ''}}" {{$attributes->merge(['style' => 'border-radius: 50%', 'artist' => 'Nghệ sĩ']) }}>
        <a href="{{$href ?? ''}}" class="card-title text-decoration-none">{{$slot}}</a>
        <div class="card-text">Nghệ sĩ</div>
    </div>
</div>
