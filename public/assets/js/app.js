(function ($) {
    $(document).ready(function () {
        $('div.code  .token.element').tooltipster({
            content: '<div class="spinner-container d-flex justify-content-center" style="margin: 8px;"><div class="spinner-border text-secondary" role="status"><span class="sr-only">Loading...</span></div></div>',
            theme: 'tooltipster-shadow',
            contentAsHTML: true,
            interactive: true,
            updateAnimation: false,
            // 'instance' is basically the tooltip. More details in the "Object-oriented Tooltipster" section.
            functionBefore: function(instance, helper) {

                var $origin = $(helper.origin);

                // we set a variable so the data is only loaded once via Ajax, not every time the tooltip opens
                if ($origin.data('loaded') !== true) {

                    $.get(LogLinkUrl + $origin.text().replace('<', '').replace('>', ''), function(data) {
                        instance.content(data);

                        $origin.data('loaded', true);
                    }).fail(function () {
                        instance.content('<h5>Nie znaleziono elementu</h3><i class="fa fa-4x fa-exclamation-circle fa-go-center"></i>');
                    });
                }
            }
        });

        var itemsValue1HelpContent = `<div style="width:500px;height:400px;overflow-y:auto;">
        <h5>Broń</h5>
            <ul>
                <li>value1 - id broni, <a href="https://wiki.sa-mp.com/wiki/Weapons">lista</a></li>
                <li>value2 - ilość amunicji</li>
            </ul>
        <h5>Amunicja</h5>
            <ul>
                <li>value1 - id broni do której pasuje, <a href="https://wiki.sa-mp.com/wiki/Weapons">lista</a></li>
                <li>value2 - ilość amunicji</li>
            </ul>
        <h5>Telefon</h5>
            <ul>
                <li>value1 - numer telefonu, jeśli 0 to zostanie wygenerowany podczas użycia</li>
                <li>value2 - </li>
            </ul>
        <h5>Płyta CD</h5>
            <ul>
                <li>value1 - 0 dla nowej płyty; płyta z większą wartością ma już przypisany adres url (jest to id z tabeli 'cds')</li>
            </ul>
        <h5>Akcesoria postaci</h5>
            <ul>
                <li>model - id obiektu, który ma być zakładany</li>
                <li>value1 - 0 dla nowego akcesorium; jeśli > 0 to jest to id z tabeli 'access'</li>
            </ul>
        <h5>Ubranie</h5>
            <ul>
                <li>value1 - id skinu, <a href="https://wiki.sa-mp.com/wiki/Skins:All">lista</a></li>
            </ul>
        <h5>Jedzenie</h5>
            <ul>
                <li>value1 - ilość przywracanego zdrowia i energii w %</li>
            </ul>
        <h5>Napoje</h5>
            <ul>
                <li>value1 - ilość przywracanego zdrowia i energii w %</li>
                <li>value2 - zawartość alkoholu
                    <ol>
                        <li>0 - brak efektów, bez alkoholu</li>
                        <li>1-4 - lekkie bujanie (2-8%)</li>
                        <li>>5 - mocne bujanie (>10%)</li>
                    </ol>
                </li>
            </ul>
        <h5>Torba medyczna</h5>
            <ul>
                <li>value1 - ilość HP jaką może łącznie wyleczyć (np. 1000)</li>
            </ul>
        <h5>Papierosy</h5>
            <ul>
                <li>value1 - ilość papierosów w paczce</li>
            </ul>
        </div>`;

        $('#itemsValue1Help, #itemsValue2Help').tooltipster({
            content: itemsValue1HelpContent,
            theme: 'tooltipster-shadow',
            contentAsHTML: true,
            interactive: true,
            updateAnimation: false
        });

        var map = L.map('map', {
            maxZoom: 2,
            minZoom: -4,
            crs: L.CRS.Simple
        }).setView([0, 0], -1);

        map.setMaxBounds(new L.LatLngBounds([-3000,-3000], [3000,3000]));

        var imageBounds = [[-3000,-3000], [3000,3000]];

        L.imageOverlay(mapImageUrl, imageBounds).addTo(map);

        GameObjects.forEach(function (coords) {
            L.marker([coords[1], coords[0]]).addTo(map);
        });


    });
}(jQuery));