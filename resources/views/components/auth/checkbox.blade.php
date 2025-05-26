@props(['name' => ''])
<div class="form-check">
    <input type="checkbox" id={{$name}} name={{$name}} {{$attributes->merge(['class' => 'form-check-input'])}}>
    <label class="form-check-label" for={{$name}}>{{$slot}}</label>
</div>
