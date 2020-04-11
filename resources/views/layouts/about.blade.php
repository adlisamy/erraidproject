<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Erraid</title>


    <!-- Styles -->
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">

</head>

<body>
    <div class="wrapper">
        <!-- Top Area -->
        @include('header')
        <!-- End Top Area -->

        <!-- Content Area -->
        <div class="about-container">
            <h1><b> Qui Sommes Nous ? </b></h1>
            <hr>
            <p class="description-1">
                L'école ERRAID de formation paramédicale est la première
                &Eacute;cole paramédicale accréditée par l'état.
                L'école possède également une clinique médicale spécialisée dans
                la chirurgie qui participe à la formation des aides soignants(e) à traver des cours théoriques et
                pratiques supervisés par une équipe de professeurs membres de l'institut et d'autres professeurs
                ayant une experience de terrain.
            </p>
            <p class="description-2">
                Pour les cours pratiques, ils sont organisés par l'école ou
                par les institutions hospitalières (hôpitaux et établissements de santé)
                affiliées au ministère de la santé, afin de répondre aux besoins et exigences
                de formation complémentaire aux programmes officiels.
            </p>
            <h1><b> Où Sommes Nous ? </b></h1>
            <hr>
            <p class="adress">
                <i class="fa fa-map-marker-alt fa-2x" aria-hidden="true"></i>
                Cité des mûriers en face de la clinique Mohamed El Mehdi, Constantine
            </p>
            <div class="map" id="map"></div>
        </div>
        <!-- End Content Area -->
    </div>
    <!-- Footer Area  -->
    @include('footer')
    <!-- End Footer Area -->
    <script>
        var map;
        var marker;
        var myLatLng= {
                    lat: 36.350299,
                    lng: 6.629150
                }
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 17
            });
            marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'ERRAID'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhgNeqQJzlAPZhhpLsqpbw6iI2gpa0PTw&callback=initMap" async defer></script>
    <script src="{{url('/js/app.js')}}"></script>
</body>

</html>