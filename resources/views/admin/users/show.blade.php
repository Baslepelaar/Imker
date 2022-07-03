<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-10">
        <div class="flex flex-wrap overflow-hidden">
            <div class="w-full overflow-hidden xl:w-1/2">
                <div class="flex pt-6">
                    <img class="h-48 block" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
                    <div class="margin-0 w-full my-auto">
                        @component('elements.text', ['cssClasses' => 'pt-3 flex bg-white p-3 my-2'])
                            <label class="text-red-1000"><strong>Naam:</strong></label>
                            <p class="pl-3 text-red-1000">{{ $user->name }}</p>
                        @endcomponent
                        @component('elements.text', ['cssClasses' => 'pt-3 flex bg-white p-3 my-2'])
                            <label class="text-red-1000"><strong>Email:</strong></label>
                            <p class="pl-3 text-red-1000">{{ $user->email }}</p>
                        @endcomponent
                    </div>
                </div>
                @component('elements.text', ['cssClasses' => 'pt-3 flex bg-white p-3 my-2'])
                    <label class="text-red-1000"><strong>Imker:</strong></label>
                    @if($user->imker)
                        <p class="pl-3 text-red-1000">Ja</p>
                    @else
                        <p class="pl-3 text-red-1000">Is geen Imker</p>
                    @endif
                @endcomponent
                @component('elements.text', ['cssClasses' => 'pt-3 flex bg-white p-3 my-2'])
                    <label class="text-red-1000"><strong>Admin:</strong></label>
                    @if($user->admin)
                        <p class="pl-3 text-red-1000">Ja</p>
                    @else
                        <p class="pl-3 text-red-1000">Is geen admin</p>
                    @endif
                @endcomponent
                @component('elements.text', ['cssClasses' => 'pt-3 bg-white p-3'])
                    <label class="text-red-1000"><strong>Informatie:</strong></label>
                    @if($user->note)
                        <p class="text-red-1000">{{ $user->note }}</p>
                    @else
                        <p class="text-red-1000">Geen informatie toegevoegd.</p>
                    @endif
                @endcomponent
                @component('elements.text', ['cssClasses' => 'pt-3 flex bg-white p-3 my-2'])
                    <label class="text-red-1000"><strong>Voor het laatst geupdate:</strong></label>
                    @if($user->updated_at)
                        <p class="pl-3 text-red-1000">{{ date('H:i:s d-m-Y', strtotime($user->updated_at)) }}</p>
                    @else
                        <p class="pl-3 text-red-1000">Nog nooit geupdate</p>
                    @endif
                @endcomponent
                @if(Auth::user()->id != $user->id)
                    @if(Auth::user()->admin != $user->admin)
                        @component('elements.form', [
                            'method' => 'POST',
                            'route' => route('users.destroy', $user)
                            ])
                            @component('elements.input.button', ['cssClasses' => 'bg-gray-800'])
                                Persoon verwijderen
                            @endcomponent
                        @endcomponent
                    @endif
                @endif
            </div>

            <div class="pl-32 pt-3 w-full overflow-hidden xl:w-1/2">
                <div class="flex mt-3">
                    <div class="pr-4">
                        @component('elements.input.button', ['url' => 'admin/users/' . $user->id . '/edit'])
                            Persoon aanpassen
                        @endcomponent
                    </div>
{{--                    <div>--}}
{{--                        @component('elements.input.button', ['url' => 'admin/users/' . $user->id . '/logs'])--}}
{{--                            Logs bekijken--}}
{{--                        @endcomponent--}}
{{--                    </div>--}}
                </div>
{{--                @component('elements.text', ['cssClasses' => 'mt-6 text-2xl text-blue-900 font-bold'])--}}
{{--                    Gemaakte arrestatiebevelen ({{ count($user->warrants) }})--}}
{{--                @endcomponent--}}
{{--                @if(count($user->warrants))--}}
{{--                    <div>--}}
{{--                        @foreach($user->warrants->reverse() as $warrant)--}}
{{--                            @component('elements.card', ['cssClasses' => 'my-2', 'route' => route('warrants.show', $warrant)])--}}
{{--                                <p><strong>{{ $warrant->title }}</strong></p>--}}
{{--                                <p>Gemaakt op: {{ date('H:i:s d-m-Y', strtotime($warrant->created_at)) }}</p>--}}
{{--                            @endcomponent--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @else--}}
{{--                    <p class="font-bold">{{ $user->name }} heeft geen arrestatiebevelen die open staan geschreven.</p>--}}
{{--                @endif--}}

{{--                @component('elements.text', ['cssClasses' => 'mt-8 text-2xl text-blue-900 font-bold'])--}}
{{--                    Gemaakte rapportages ({{ count($user->reports) }})--}}
{{--                @endcomponent--}}
{{--                @if(count($user->reports))--}}
{{--                    @foreach($user->reports->reverse() as $report)--}}
{{--                        @component('elements.card', ['cssClasses' => 'my-2', 'route' => route('reports.show', $report)])--}}
{{--                            <p><span class="text-gray-500">#{{ $report->unique_random_id }}</span> <strong>{{ $report->title }}</strong></p>--}}
{{--                            <p>Gemaakt op: {{ date('H:i:s d-m-Y', strtotime($report->created_at)) }}</p>--}}
{{--                        @endcomponent--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <p class="font-bold">{{ $user->name }} heeft geen rapportages die open staan geschreven.</p>--}}
{{--                @endif--}}
            </div>
        </div>
    </div>
</x-app-layout>
