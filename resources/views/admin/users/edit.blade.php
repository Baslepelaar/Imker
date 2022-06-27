<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="container mx-auto px-10">
            @if(URL::previous() != request()->url())
                @component('elements.input.button', [
                    'route' => URL::previous(),
                    'cssClasses' => 'bg-gray-800 w-48'
                    ])
                    Keer terug
                @endcomponent
            @endif
        </div>
        <div class="flex justify-center">
            <div class="text-center w-1/2 place-content-center my-8">
                @component('elements.text', ['cssClasses' => 'text-3xl font-bold text-black-800'])
                    Profiel bewerken
                @endcomponent
                @component('elements.text', ['cssClasses' => ''])
                    Hier heb je een mogelijkheid om een persoon te wijzigen.<br>
                    Zorg dat alle velden zijn ingevuld, dit maakt het voor jou en je meede beheerders een stuk makkelijker.
                @endcomponent
            </div>
        </div>
        <div class="container mx-auto px-10 mt-12">
            @component('elements.form', [
                  'method' => 'POST',
                  'route' => route('users.update', $user)
                ])
                @method('PATCH')
                @component('elements.input.row')
                    @slot('inputLeft')
                        @component('elements.label')
                            Naam
                        @endcomponent
                        <div>
                            @component('elements.input.input', ['name' => 'name', 'type' => 'text', 'placeholder' => 'Naam', 'required' => 'required', 'value' => $user->name])
                            @endcomponent
                        </div>
                    @endslot
                    @slot('inputRight')
                        @component('elements.label')
                            Email
                        @endcomponent
                        @component('elements.input.input', ['name' => 'email', 'type' => 'email', 'placeholder' => 'Email', 'required' => 'required', 'value' => $user->email])
                        @endcomponent
                    @endslot
                @endcomponent
                @component('elements.input.textarea', ['name' => 'note', 'rows' => '3', 'placeholder' => 'Notitie', 'required' => '', 'value' => $user->note])
                @endcomponent
                @component('elements.input.button', ['type' => 'primary'])
                    Gebruiker bijwerken
                @endcomponent
            @endcomponent
        </div>
    </div>
</x-app-layout>
