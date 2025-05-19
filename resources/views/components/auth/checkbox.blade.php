@props(['id' => ''])
<div class="form-check">
    <input type="checkbox" id={{$id}} {{$attributes->merge(['class' => 'form-check-input'])}}>
    <label class="form-check-label" for={{$id}}>{{$slot}}</label>
</div>
