<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row">

    <div class="col-lg-2 col-md-2 col-sm-2">
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10">
        <div class="header_bottom">
            
                                    <div class="logo_area" style="margin-left:150px;"><a href="/" class="logo"><img src="/logo/logo_maps.png" style="height:60px;"alt=""></a></div>
                         
            
                    </div>
        <div class="card">
            <div class="card-body">
                <div id="maps">
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->EndSection(); ?>
<?= $this->section('foot'); ?>
<!-- mapleaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="/geo/leaflet.ajax.js"></script>
<script>
    var kelurahan = L.layerGroup();
    <?php
    foreach ($Peta as $maps => $b) {
    ?>
        var myStyle = {
            "color": "<?= $b['warna']; ?>",
            "weight": 2,
            "opacity": 1.75
        };


        var jsonTest = new L.GeoJSON.AJAX(["/geo/kelurahan/<?= $b['nama']; ?>"], {
            onEachFeature: popUp,
            style: myStyle
        }).addTo(kelurahan).on('click', function() {
            Swal.fire({
                title: "kelurahan <?= $b['nama_kel']; ?>",
                // html: '<iframe src="/Peta/detail/" width="450" height="380"></iframe> <br><h4>jumlah penduduk = </h4>',

            })
        });;
    <?php
    } ?>
    var kecamatan = L.layerGroup();
    <?php
    foreach ($Kec as $maps => $b) {
    ?>
        var myStyle = {
            "color": "<?= $b['warna']; ?>",
            "fillColor": "<?= $b['warna']; ?>",
            "fillOpacity": 0.7,
            "weight": 2,
            "opacity": 8,
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
        var jsonTest = new L.GeoJSON.AJAX(["/geo/<?= $b['nama']; ?>"], {
            onEachFeature: popUp,
            style: myStyle
        }).addTo(kecamatan);
    <?php
    } ?>
     <?php
    foreach ($jalan as $maps => $b) {
    ?>
    var jalan = L.layerGroup();
    var myStyle = {
        "color": "<?= $b['warna'];?>",
        "weight": 1.5,
        "opacity": 0.65
    };

    var jsonTest = new L.GeoJSON.AJAX(["geo/batas/<?= $b['nama']; ?>"], {
        // onEachFeature: popUp,
        style: myStyle
    }).addTo(jalan);
    <?php
    } ?>
    <?php
    foreach ($sawah as $maps => $b) {
    ?>
    var sawah = L.layerGroup();
    var myStyle = {
        "color": "<?= $b['warna']; ?>",
        "weight": 1.5,
        "opacity": 0.65
    };

    var jsonTest = new L.GeoJSON.AJAX(["geo/batas/<?= $b['nama']; ?>"], {
        // onEachFeature: popUp,
        style: myStyle
    }).addTo(sawah);
<?php
    } ?>
    var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

    var
        satelite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            id: 'google.satellite',
            tileSize: 512,
            zoomOffset: -1,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: mbAttr
        }),
        hybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            tileSize: 512,
            zoomOffset: -1,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: mbAttr
        }),
        streets = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });
        a = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });

    var map = L.map('maps', {
        center: [-7.3274, 108.2207],
        zoom: 12,
        layers: [hybrid, kelurahan]
    });

    var baseLayers = {
        "Streets": streets,
        "satelite": satelite,
        "hybrid": hybrid,
        "---------------------------------------": a,

    };

    var overlays = {
        "Batas kelurahan": kelurahan,
        "Batas kecamatan": kecamatan,
        "jalan": jalan,
        "sawah": sawah,
    };

    var layer = L.control.layers(baseLayers, overlays).addTo(map);
    var htmlObject = layer.getContainer();
    var a = document.getElementById('layer')

    function setParent(el, newParent) {
        newParent.appendChild(el);
    }
    setParent(htmlObject, a);
    
</script>
</div>

<?= $this->endSection(); ?>