<?= $this->extend('layout/new_template'); ?>
<?= $this->section('content'); ?>

          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3>Peta Wilayah <b>Kota Tasikmalaya</b></h3>
                  <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
                </div>
                <!-- <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <h3 class="mb-4"><i class="fa fa-users"></i> Penduduk</h3>
                      <p class="fs-30 mb-2">663,986 Jiwa</p>
                      <!-- <p>10.00% (30 days)</p> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <h3 class="mb-4"><i class="fa fa-graduation-cap"></i> Murid</h3>
                      <p class="fs-30 mb-2">61,344 Siswa</p>
                      <!-- <p>22.00% (30 days)</p> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <h3 class="mb-4"><i class="fa fa-university"></i> Satuan Pendidikan</h3>
                      <p class="fs-30 mb-2">540 Sekolah</p>
                      <!-- <p>10.00% (30 days)</p> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <h3 class="mb-4"><i class="fa fa-map-marker"></i> Luas Wilayah</h3>
                      <p class="fs-30 mb-2">184.2 km2</p>
                      <!-- <p>22.00% (30 days)</p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           
          <div class="row">
            <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <div id="maps"></div> 
                </div>
              </div>
            </div>
            <div class="col-md-2 grid-margin stretch-card" style="height: 30%;">
                <div class="card">
                    <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-inpu" type="radio" name="exampleRadios" id="street" value="option1">
                                <label class="form-check-label d-inline ml-0" for="street">
                                    Street
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-inpu" type="radio" name="exampleRadios" id="satelite" value="option2">
                                <label class="form-check-label d-inline ml-0" for="satelite">
                                    Satelite
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-inpu" type="radio" name="exampleRadios" id="hybrid" value="option2" checked>
                                <label class="form-check-label d-inline ml-0" for="hybrid">
                                    Hybrid
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-inpu" type="checkbox" id="kelurahan" checked>
                                <label class="form-check-label d-inline ml-0" for="kelurahan">Kelurahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-inpu" type="checkbox" id="kecamatan">
                                <label class="form-check-label d-inline ml-0" for="kecamatan">Kecamatan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-inpu" type="checkbox" id="jalan">
                                <label class="form-check-label d-inline ml-0" for="jalan">Jalan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-inpu" type="checkbox" id="sawah">
                                <label class="form-check-label d-inline ml-0" for="sawah">Sawah</label>
                            </div>
                            </div>
                </div>
            </div>
            <!-- <div class="col-md-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jumlah Penduduk</h4>
                        <div class="list-wrapper pt-2">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                        <th class="pl-0  pb-2 border-bottom">Places</th>
                                        <th class="border-bottom pb-2">Orders</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pl-0">Kentucky</td>
                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p></td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">Ohio</td>
                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">54</span>(3.25%)</p></td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">Nevada</td>
                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">22</span>(2.22%)</p></td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">North Carolina</td>
                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">46</span>(3.27%)</p></td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">Montana</td>
                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">17</span>(1.25%)</p></td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">Nevada</td>
                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">52</span>(3.11%)</p></td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 pb-0">Louisiana</td>
                                            <td class="pb-0"><p class="mb-0"><span class="font-weight-bold mr-2">25</span>(1.32%)</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
          </div>

        <?= $this->EndSection(); ?>

<?= $this->section('footer') ?>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?= base_url(); ?>/geo/leaflet.ajax.js"></script>
<script>
    var kelurahan = L.layerGroup();
    <?php
    foreach ($Peta as $maps => $b) {
    ?>
        var myStyle = {
            "color": "#CCC",
            "fillColor": "<?= $b['warna']; ?>",
            "fillOpacity": 0.7,
            "weight": 2,
            "opacity": 1.75
        };


        var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>/geo/kelurahan/<?= $b['nama']; ?>"], {
            onEachFeature: popUp,
            style: myStyle
        }).addTo(kelurahan).on('click', function() {
            Swal.fire({
                title: "kelurahan <?= $b['nama_kel']; ?>",
                // html: '<iframe src="/Peta/detail/" width="450" height="380"></iframe> <br><h4>jumlah penduduk = </h4>',
            });
        });
    <?php
    } ?>
    var kecamatan = L.layerGroup();
    <?php
    foreach ($Kec as $maps => $b) {
    ?>
        var myStyle = {
            "color": "#CCC",
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
        var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>/geo/<?= $b['nama']; ?>"], {
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

    var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>/geo/batas/<?= $b['nama']; ?>"], {
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

    var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>/geo/batas/<?= $b['nama']; ?>"], {
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


    let map = L.map('maps', {
        center: [-7.3574, 108.2207],
        zoom: 12,
        layers: [hybrid, kelurahan]
    });

    

    // var baseLayers = {
    //     "Streets": streets,
    //     "satelite": satelite,
    //     "hybrid": hybrid,
    //     "---------------------------------------": a,
    // };

    // var overlays = {
    //     "Batas kelurahan": kelurahan,
    //     "Batas kecamatan": kecamatan,
    //     "jalan": jalan,
    //     "sawah": sawah,
    // };

    // var layer = L.control.layers(baseLayers, overlays, {collapsed: false}).addTo(map);
    // var htmlObject = layer.getContainer();
    // var a = document.getElementById('layer')

    // function setParent(el, newParent) {
    //     newParent.appendChild(el);
    // }
    // a.append(htmlObject)
    // setParent(htmlObject, a);
    let type = null;
    let layers = [hybrid, kelurahan]
    kecamatan.options = {name: 'kecamatan'}
    kelurahan.options = {name: 'kelurahan'}
    sawah.options = {name: 'sawah'}
    jalan.options = {name: 'jalan'}
    $('#street').on('click', function() {
        layers = layers.filter(item => item._url != 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw').filter(item => item._url != 'http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}').filter(item => item._url != 'http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}')
        layers.push(streets)
        map.remove();
        map = L.map('maps', {
            center: [-7.3574, 108.2207],
            zoom: 12,
            layers: layers,
        });
    });

    $('#satelite').on('click', function() {
        layers = layers.filter(item => item._url != 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw').filter(item => item._url != 'http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}').filter(item => item._url != 'http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}')
        layers.push(satelite)
        map.remove();
        map = L.map('maps', {
            center: [-7.3574, 108.2207],
            zoom: 12,
            layers: layers,
        });
    });
    $('#hybrid').on('click', function() {
        layers = layers.filter(item => item._url != 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw').filter(item => item._url != 'http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}').filter(item => item._url != 'http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}')
        layers.push(hybrid)
        map.remove();
        map = L.map('maps', {
            center: [-7.3574, 108.2207],
            zoom: 12,
            layers: layers,
        }); 
    });
    $('#kecamatan').on('change', function() {
        if (this.checked) {
            layers.push(kecamatan)
        } else {
            layers = layers.filter(item => item.options.name != 'kecamatan')
        }
        map.remove();
        map = L.map('maps', {
            center: [-7.3574, 108.2207],
            zoom: 12,
            layers: layers,
        }); 
    });
    $('#kelurahan').on('change', function() {
        if (this.checked) {
            layers.push(kelurahan)
        } else {
            layers = layers.filter(item => item.options.name != 'kelurahan')
        }
        map.remove();
        map = L.map('maps', {
            center: [-7.3574, 108.2207],
            zoom: 12,
            layers: layers,
        }); 
    });
    $('#sawah').on('change', function() {
        if (this.checked) {
            layers.push(sawah)
        } else {
            layers = layers.filter(item => item.options.name != 'sawah')
        }
        map.remove();
        map = L.map('maps', {
            center: [-7.3574, 108.2207],
            zoom: 12,
            layers: layers,
        }); 
    });
    $('#jalan').on('change', function() {
        if (this.checked) {
            layers.push(jalan)
        } else {
            layers = layers.filter(item => item.options.name != 'jalan')
        }
        map.remove();
        map = L.map('maps', {
            center: [-7.3574, 108.2207],
            zoom: 12,
            layers: layers,
        }); 
    });
</script>
<?= $this->EndSection(); ?>