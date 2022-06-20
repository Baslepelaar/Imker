@php
    if (!isset($route)) {
      $route = null;
    }

    if (!isset($url)) {
        $url = null;
    }
@endphp
@if($route)
    <a href="{{ $route }}" class="{{ $cssClasses ?? 'bg-blue-1000' }} flex mt-3 py-3 px-6 text-lg font-medium text-white">
        @elseif($url)
            <a href="{{ url($url) }}" class="{{ $cssClasses ?? 'bg-blue-1000' }} bg-blue-1000 flex mt-3 py-3 px-6 text-lg font-medium text-white">
                @else
                    <button {{ $route ?? 'type="submit"'}} {{ $livewire ?? '' }} class="{{ $cssClasses ?? 'bg-blue-1000' }} flex mt-3 py-3 px-6 text-lg font-medium text-white">
                @endif
                {{ $slot }}
                @if($route || $url)
            </a>
            @else
            </button>
@endif
