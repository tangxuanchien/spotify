@props(['form_text' => '', 'id'])

<div class="form-group">
    <label for={{$id}} class="form-label">{{ $slot }}</label>
    <input
        {{ $attributes->merge(['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nhập thông tin của bạn']) }}  id = {{$id}}>
    @if (!empty($form_text))
        <div class="form-text">
            {{ $form_text }}
        </div>
    @endif
</div>
