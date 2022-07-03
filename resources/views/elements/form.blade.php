@php
    if (!isset($delete)) {
      $delete = null;
    }
@endphp
<form class="{{ $cssClasses ?? '' }}" action="{{ $route }}" method="POST"  enctype="multipart/form-data">
    @include('elements/validation')
    @method($method)
    @csrf
    {{ $slot }}
</form>
