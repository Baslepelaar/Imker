@php
    if (!isset($value)) {
      $value = old($name);
    }
@endphp
<div class="">
    <div class="{{ $cssClasses ?? '' }}">
        <label class="">{{ $slot }}</label>
    </div>
    <div>
        <input class="{{ $style ?? 'block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8  shadow leading-tight focus:outline-none focus:shadow-outline' }} {{ $errors->first($name) ? 'border-red-400' : 'border-gray-400' }}"
               type="{{ $type }}"
               name="{{ $name }}"
               value="{{ $value }}"
               placeholder="{{ $placeholder }}"
               autocomplete="off"
               {{ $required ?? '' }}
               {{ $readonly ?? '' }}
               {{ $wire ?? '' }}
               {{ $min ?? '' }}
               minlength="{{ $minlength ?? '' }}"
               maxlength="{{ $maxlength ?? '' }}"
        >
        <div class="text-red-800 {{ $required ? 'isrequired' : 'hidden' }}">*</div>
    </div>

</div>
