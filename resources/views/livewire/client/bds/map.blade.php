<div>
    {{-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1QjHcCnbgtl7xqkw_pEC82--o4_qjVIyE" width="640" height="480"></iframe>--}}
    <div class="container-fluid">
        <div id="myMap" style='position:relative;width:100%;height:400px;'></div>
    </div>
</div>
@push('scripts')
<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AriRJgQwqfFtUVyixXJKcIzcNaA7au3N6-BmzoedkmMJjoFf09TkfNUdoNaDccRG' async defer></script>
<script type="text/javascript">
    function GetMap()
    {
        var map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'AriRJgQwqfFtUVyixXJKcIzcNaA7au3N6-BmzoedkmMJjoFf09TkfNUdoNaDccRG',
            center: new Microsoft.Maps.Location(6.927079, 79.861244),
            mapTypeId: Microsoft.Maps.MapTypeId.aerial,
            allowHidingLabelsOfRoad: true,
            zoom: 7
        });
        map.setView({ labelOverlay: Microsoft.Maps.LabelOverlay.hidden});
        var nuwaraeliya = new Microsoft.Maps.Location(6.9766951, 80.7652094);
        var ginigathhena = new Microsoft.Maps.Location(6.9995052, 80.4708607);
        //Create custom Pushpin
        var pinNuwaraeliya = new Microsoft.Maps.Pushpin(nuwaraeliya, {
            title: 'BDS',
            subTitle: 'Nuwara Eliya',
        });

        var infoboxNuwaraeliya = new Microsoft.Maps.Infobox(nuwaraeliya, {
            visible: false,
        });

        //Store some metadata with the pushpin.
        pinNuwaraeliya.metadata = {
            title: 'Berendina Development Services (Gte) Ltd.',
            description: 'No-16A, Cross Street, Nuwara Eliya'
        };

        var pinGinigathhena = new Microsoft.Maps.Pushpin(ginigathhena, {
            title: 'BDS',
            subTitle: 'Ginigathehena',
        });

        var infoboxGinigathhena = new Microsoft.Maps.Infobox(ginigathhena, {
            visible: false,
        });

        pinGinigathhena.metadata = {
            title: 'Berendina Development Services (Gte) Ltd.',
            description: 'Colombo Road, Badhupola, Ginigathena'
        };

        //Add a click event handler to the pushpin.
        Microsoft.Maps.Events.addHandler(pinNuwaraeliya, 'click', pushpinClickedNuwaraEliya);
        Microsoft.Maps.Events.addHandler(pinGinigathhena, 'click', pushpinClickedGinigathhena);

        //Add the pushpin to the map
        map.entities.push(pinNuwaraeliya);
        map.entities.push(pinGinigathhena);

        //Assign the infobox to a map instance.
        infoboxNuwaraeliya.setMap(map);
        infoboxGinigathhena.setMap(map);

        function pushpinClickedNuwaraEliya(e) {
            //Make sure the infobox has metadata to display.
            if (e.target.metadata) {
                //Set the infobox options with the metadata of the pushpin.
                infoboxNuwaraeliya.setOptions({
                    location: e.target.nuwaraeliya,
                    visible: true,
                    title: e.target.metadata.title,
                    description: e.target.metadata.description,
                });
            }
        }

        function pushpinClickedGinigathhena(e) {
            //Make sure the infobox has metadata to display.
            if (e.target.metadata) {
                //Set the infobox options with the metadata of the pushpin.
                infoboxGinigathhena.setOptions({
                    location: e.target.ginigathhena,
                    visible: true,
                    title: e.target.metadata.title,
                    description: e.target.metadata.description,
                });
            }
        }

    }
 </script>
@endpush
