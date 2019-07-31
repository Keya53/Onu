<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/map.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="js/gmaps.js"></script>
        <style type="text/css">
            #map {
                width: 100%;
                height: 400px;
            }
        </style>
        <title></title>
    </head>
    <body>

   


    <div id="map"></div>
    <script>
        var map = new GMaps({
            el: '#map',
            lat: 23.707310,
            lng: 90.415480,
            scrollwheel:false//scroll korle zoom in out hoto ata likhle zoom bondho hbe
            
        });
    </script>
 </body>
</html>
