<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Basiscursus') }}
        </h2>
    </x-slot>

    <section class="container py-12">
        <article class="row max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article class="col-6">
                <h1 class="" style="font-weight:bold; font-size: 2rem; margin-top: 3vh; margin-bottom: 3vh">Basiscursus
                    bijen houden</h1>
                <p>Overweegt U om bijen te gaan houden? Dan is de basiscursus bijen houden een aanrader om goed
                    voorbereid
                    van start te gaan.
                    De imkervereniging Oegstgeest geeft jaarlijks de basiscursus Imkeren.
                    De cursus bestaat uit 5 theorielessen en 12 praktijklessen.
                    Theorielessen worden in de avond gegeven van 19:30 tot 21:30 en beginnen in februari.
                    Praktijklessen zijn gepland op zaterdagmiddag tussen 13:00 tot 16:30 en beginnen in april. Omdat
                    praktijklessen afhankelijk zijn van het weer, kunnen geplande cursus middagen afwijken.
                    De cursus wordt afgesloten met een schriftelijk examen, waarna u een diploma krijgt.
                    Onderstaand is inbegrepen in het cursusgeld en wordt bij de eerste les uitgereikt:

                <ul style="list-style-type:disc;">
                    <li>Het lesboek</li>
                    <li>Het praktijkboek</li>
                </ul>
                basiscursus 2013
                Tijdens het jaar waarin u de cursus volgt, krijgt u gratis het lidmaatschap van de NBV aangeboden en
                ontvangt u maandelijks het blad Bijenhouden.
                De cursuskosten bedragen € 200,- per deelnemer. Het maximum aantal deelnemers is 12 per cursus. Bij meer
                aanmeldingen dan beschikbare plaatsen, geldt de volgorde van aanmelding, u wordt hier over
                geïnformeerd.</p>
            </article>

            <article>
                <img src="img/basiscursus_2013_1.jpg" alt="Basiscursus 2013" width="500" height="600"
                     style="border-radius: 1vh;">
                <img src="img/basiscursus_2013_2.jpg" alt="Basiscursus 2013" width="500" height="600"
                     style="border-radius: 1vh;">
            </article>
            <article>
                <h1 class="" style="font-weight:bold; font-size: 2rem; margin-top: 3vh; margin-bottom: 1vh;">
                    Inschrijven</h1>
                <p style="color: grey">N.B. de cursus 2022 is volgeboekt. Nieuwe aanmeldingen worden op de wachtlijst
                    geplaatst.</p><br>
                <p>
                    N.B. als het formulier succesvol verzonden is, verschijnt er een bevestiging op de pagina. Is die er
                    niet en heeft u ook geen kopie ontvangen? Neem dan contact op met de
                    <a style="color: orange"
                       href="https://www.imkerpedia.nl/wiki/index.php?title=Bijenkasten">webmaster</a>.<br><br>
                    Inschrijving cursus 2023
                </p>
            </article>
            <form action="/action_page.php">
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="achternaam" placeholder="Achternaam"
                           name="achternaam">
                </div>
                <div class="mb-3 mt-3">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="postcode" placeholder="Postcode" name="postcode">
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="adres" placeholder="Adres" name="adres">
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="woonplaats" placeholder="Woonplaats"
                           name="woonplaats">
                </div>
                <div class="mb-3 mt-3">
                    <input type="tel" class="form-control" id="tel" placeholder="06-12345678" name="tel"
                           pattern="[0-9]{2}-[0-9]{8}">
                </div>
                <div class="mb-3 mt-3">
                    <textarea name="opmerkingen" form="usrform">Opmerkingen</textarea>
                </div>
                <p>Ik ben lid van het NBV</p>
                <input type="radio" id="lid" name="lid" value="ja">
                <label for="ja">Ja</label><br>
                <input type="radio" id="lid" name="lid" value="nee">
                <label for="nee">Nee</label><br>
                <button class="btn-block mb-3 mt-3" type="submit" class="btn btn-primary">Verzenden</button>
            </form>
            <p class="mt-5">Na inschrijving krijgt u een mail met gegevens hoe u kunt betalen, plus de locaties van
                de cursus.<br>
                De inschrijving is definitief na betaling van het cursusgeld.<br><br>

                Mocht u vragen hebben over de cursus, neem dan <a style="color: orange" href="/contact">contact</a>
                op.</p>
        </article>
    </section>
</x-guest-layout>
