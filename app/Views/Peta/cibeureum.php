<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peta</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style type="text/css">
        #maps {
            height: 600px;
            width: 600px;
            
        }
    </style>
    <body>
        <div id="maps">
    </div>
    <!-- mapleaflet -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="/geo/leaflet.ajax.js"></script>
    <script>
        var kecamatan = L.layerGroup();
        <?php
        foreach ($Kec as $maps => $b) {
        ?>
            var myStyle = {
                "color": "#DC143C",
                "weight": 2,
                "opacity": 0.5,
            };

            function popUp(f, l) {
                var out = [];
                if (f.properties) {
                    for (key in f.properties) {
                        out.push(key + ": " + f.properties[key]);
                    }
                    l.bindPopup(out.join("<br />"));
                }
            }
            var jsonTest = new L.GeoJSON.AJAX(["/geo/Kec.cibeureum.geojson"], {
                // onEachFeature: popUp,
                style: myStyle
            }).addTo(kecamatan);
        <?php
        } ?>
    


        var mbAttr = '',
            mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        var grayscale = L.tileLayer(mbUrl, {
                id: 'mapbox/light-v9',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            }),
            streets = L.tileLayer(mbUrl, {
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            });

        var map = L.map('maps', {
            center: [-7.3507375, 108.2674092],
            zoom: 13,
            layers: [streets, kecamatan]
        });

        var baseLayers = {
            "Grayscale": grayscale,
            "Streets": streets,

        };

        var overlays = {
            "kecamatan": kecamatan,
        };

        L.control.layers(baseLayers, overlays).addTo(map);
    </script>
</div>
    </body>

</html>