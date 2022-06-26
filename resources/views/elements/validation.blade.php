<div class="{{ $errors->any() ? 'my-2 w-full overflow-hidden sm:my-2 md:my-2 lg:my-2 xl:my-2' : 'hidden' }}">
    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-800 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-medium">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </strong>
        </div>
    @endif
</div>
