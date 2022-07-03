@php
    if (!isset($value)) {
      $value = old($name);
    }
@endphp
<div class="mt-3">
    <label class="text-white">{{ $slot }}</label>
    <textarea class="border {{ $cssClasses ?? '' }} {{ $errors->first($name) ? 'border-red-400' : 'border-gray-400' }} outline-none px-4 py-2 text-base w-full relative"
              name="{{ $name }}"
              placeholder="{{ $placeholder }}"
              autocomplete="off"
              rows="{{ $rows }}"
          {{ $required ? 'required' : '' }}
>{{ $value }}</textarea>
    <div class="text-red-800 {{ $required ? 'isrequired2' : 'hidden' }}">*</div>
</div>
