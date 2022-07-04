<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

{{--header--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="background-color: rgba(235, 189, 52, 0.5);">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200" style="background-color: rgba(235, 189, 52, 0.5); background-image: url('img/imkerbanner.jpg'); height: 20vh; ">
                    <div class="mt-8 text-2xl text-white">
                        <h1 style="text-align: center; font-size: 50px"><b>Contact</b></h1>
                    </div>
                </div>

{{--eind header--}}

{{-- 1e blok--}}

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <img src="img/bee.png" alt="een bij" class="block h-9 w-auto">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">Het bestuur van de Imkervereniging Oegstgeest bestaat uit:</a></div>
                        </div>



                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                <table class="wp-block-table has-fixed-layout is-style-stripes">
                                    <tbody>
                                    <tr>
                                        <td style="padding: 10px;
                                            border-style: solid;
                                            padding: 10px;
                                            text-align: left;"
                                            >Alma van der Wijgaard</td>
                                        <td style="padding: 10px;
                                            border-style: solid;
                                            padding: 10px;
                                            text-align: left;"
                                            >voorzitter</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px;
                                            border-style: solid;
                                            padding: 10px;
                                            text-align: left;">Fred Schalker</td>
                                        <td style="padding: 10px;
                                            border-style: solid;
                                            padding: 10px;
                                            text-align: left;">secretaris</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px;
                                            border-style: solid;
                                            padding: 10px;
                                            text-align: left;">Karel Diephuis</td>
                                        <td style="padding: 10px;
                                            border-style: solid;
                                            padding: 10px;
                                            text-align: left;">penningmeester</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px;
                                            border-style: solid;
                                            padding: 10px;
                                            text-align: left;">Håvar Solheim</td>
                                        <td style="padding: 10px;
                                            border-style: solid;
                                            padding: 10px;
                                            text-align: left;">bestuur lid</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <div>
                                    <p>Voor vragen over de vereniging, of onze cursus, verstuur een mail naar onze <a href="mailto:secretaris@imkervereniging-oegstgeest.nl">secretaris</a>.</p>
                                    <p>Voor vragen over de website zelf, neem contact op met de <a href="mailto:webmaster@imkervereniging-oegstgeest.nl">webmaster</a>.</p>

                                </div>



                            </div>
                        </div>
                    </div>
{{--eind 1e blok--}}

{{--2e blok--}}
                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <img src="img/bee.png" alt="een bij" class="block h-9 w-auto">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laracasts.com">Recente berichten:</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">

                                <aside>
                                    <div>
                                        <ul>
                                            <li>
                                                <a href="https://www.imkervereniging-oegstgeest.nl/2022/06/09/honing-slingeren/">Honing slingeren</a>
                                            </li>
                                            <li>
                                                <a href="https://www.imkervereniging-oegstgeest.nl/2022/02/21/bijenmarkt-austerlitz/">Bijenmarkt Austerlitz</a>
                                            </li>
                                            <li>
                                                <a href="https://www.imkervereniging-oegstgeest.nl/2021/11/04/diplomas-uitgereikt/">Diploma’s uitgereikt!</a>
                                            </li>
                                            <li>
                                                <a href="https://www.imkervereniging-oegstgeest.nl/2021/11/01/cursus-specialist-bijenproducten-haarlem/">Cursus Specialist Bijenproducten – Haarlem</a>
                                            </li>
                                            <li>
                                                <a href="https://www.imkervereniging-oegstgeest.nl/2021/08/31/slingeren/">Slingeren</a>
                                            </li>
                                            <li>
                                                <a href="https://www.imkervereniging-oegstgeest.nl/2021/07/12/bijenjournaal/">Bijenjournaal</a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>

                            </div>
                        </div>
                    </div>
{{--eind 2e blok--}}



            </div>
        </div>
    </div>
</x-guest-layout>
