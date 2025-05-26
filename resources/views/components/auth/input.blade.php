@props(['form_text' => '', 'name' => ''])

<div class="form-group">
    <label for={{ $name }} class="form-label">{{ $slot }}</label>
    <input id={{ $name }} name={{ $name }} required value="{{old($name)}}"
        {{ $attributes->merge(['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nhập thông tin của bạn']) }}>
    @if (!empty($form_text))
        <div class="form-text">
            {{ $form_text }}
        </div>
    @endif
</div>
