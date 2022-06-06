<!DOCTYPE HTML>
<html>

<head>
    <script type="text/javascript">
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light1", // "light2", "dark1", "dark2"
                animationEnabled: false, // change to true		
                title: {
                    text: "DATA KEPENDUDUKAN"
                },
                data: [{
                    // Change type to "bar", "area", "spline", "pie",etc.
                    type: "column",
                    dataPoints: [{
                            label: "laki-laki",
                            y: <?= $kep->j_man; ?>
                        },
                        {
                            label: "perempuan",
                            y: <?= $kep->j_woman; ?>
                        }

                    ]
                }]
            });
            chart.render();

        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 300px; width: 300px;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>

</html>