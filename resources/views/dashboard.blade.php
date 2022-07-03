<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homepage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="background-color: rgba(235, 189, 52, 0.5);">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200" style="background-color: rgba(235, 189, 52, 0.5); background-image: url('img/imkerbanner.jpg'); height: 30vh; ">
                    <div class="mt-8 text-2xl text-white">
                        <h1 style="text-align: center; font-size: 50px"><b>Welkom bij Imkers!</b></h1>
                    </div>

                    <div class="mt-8 text-2xl text-white">
                        <b>het houden van bijen!</b>
                    </div>

                    <div class="mt-6 text-white">
                        De imkervereniging Oegstgeest en omstreken strekt zich uit over de regio Oegstgeest, Leiden, Lisse, Kaag en Braassem.
                        De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van bijen met hun (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.
                    </div>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <img src="../img/bee.png" alt="een bij" class="block h-9 w-auto">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">Onze activiteiten</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                <ul>
                                    <li>het geven van cursussen over het houden van bijen (zie de pagina ‘<a href="https://www.imkervereniging-oegstgeest.nl/basiscursus-bijenhouden/">basiscursus</a>‘)</li><br>
                                    <li>het organiseren van lezingen op informatieavonden voor de beginnende imkers</li><br>
                                    <li>wij stellen beginnende imkers in de gelegenheid om informatie te krijgen van ervaren imkers tijdens informatieavonden en ochtenden, zoals ‘de imkerhoek’</li><br>
                                    <li>wij versturen&nbsp; interessante artikelen over het houden van bijen (zie de pagina <a href="https://www.imkervereniging-oegstgeest.nl/informatie/">artikelen</a>)</li><br>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <img src="img/bee.png" alt="een bij" class="block h-9 w-auto">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">bijenzwerm/hommelnest?</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Weet u het verschil tussen een bijenzwerm en een hommelnest zonder dat u er eerder een gezien heeft? Ieder jaar vanaf eind maart/april is er kans dat u een bijenzwerm tegenkomt en af en toe ook een hommelnest. Het kan er eng uitzien vandaar dat we het graag uitleggen zodat u weet wat er gebeurt.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <img src="img/bee.png" alt="een bij" class="block h-9 w-auto">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Bijenzwerm</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Wat is een bijenzwerm en waarom gaan de bijen zwermen?
                                In de maanden mei en juni en soms ook nog wel in juli vermeerderen bijenvolken zich. Zij doen dit door een zogenaamde zwerm te vormen. Een flink deel van het volk, enkele duizenden bijen, gaat er vandoor met de koningin in hun midden. Ze gaan op zoek naar een nieuw onderkomen.
                                Voordat ze dit hebben gevonden maakt de zwerm een tussenstop. Ze vormen een klont bijen aan een boomtak, een hekje of een dakrand. Daar blijven ze een paar uur tot soms een paar dagen hangen. In de tussentijd gaan verkenners op zoek naar een nieuw ‘huis’.
                                Hoewel een bijenzwerm er dreigend uit kan zien, is ze niet gevaarlijk. Bijen zijn er niet op uit om u te steken. Ze zijn alleen op doorreis en hebben niets te verdedigen tenzij ze aangevallen worden.
                                Neem afstand tot een zwerm en laat het geheel met rust. Ziet u een bijenzwerm in Oegstgeest of de directe omgeving dan kunt u via zwerm@imkervereniging-oegstgeest.nl direct contact zoeken of stuur een foto en het adres via WhatsApp naar: 06-52024488. Zij kunnen met u een afspraak maken om de bijenzwerm op te halen.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <img src="img/bee.png" alt="een bij" class="block h-9 w-auto">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Hommelnest</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Hommels worden nog wel eens verward met wespen en bijen. Mensen zijn daarom nog weleens bang dat ze aangevallen worden door de hommel, om die reden willen ze dan ook geen hommelnest in de tuin. Ook rondvliegende hommels worden nog weleens gedood, uit angst voor steken. Een hommelnest verwijderen is eigenlijk niet nodig. Een hommel is niet agressief en het nest bestaat uit maximaal 150 exemplaren. Hommels zijn altijd druk bezig met het verzamelen van stuifmeel en steken bijna niet. Alleen als er direct gevaar dreigt voor een hommel kan zij steken. Een hommelnest kan je het beste lekker laten zitten, tenzij het nest in de weg zit zoals bij een voordeur van een huis. Als er veel menselijke activiteit is in de vliegroute van de hommels op en neer naar hun nest dan kan het verstandig zijn het hommelnest te laten verplaatsen door een imker. Zit uw hommelnest in de weg dan kunt u contact opnemen met de Imkers van Imkervereniging Oegstgeest.
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
