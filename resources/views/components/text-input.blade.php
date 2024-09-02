@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-[#ababab] focus:ring-[#ababab] rounded-md shadow-sm',
]) !!}>
