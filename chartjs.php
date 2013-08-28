<head>
  <script type="text/javascript" src="js/vendor/jquery-1.9.0.min.js">
  </script>
  <script type="text/javascript" src="js/third/jplayer/jquery.jplayer.min.js"></script>
  <!-- // <script type="text/javascript" src="js/angular/1.1.5/angular.min.js"></script> -->
  

    <link href="js/chart/styles.css" rel="stylesheet" />
    <script src="js/chart/Lib/js/knockout-2.2.1.js"></script>
    <script src="js/chart/Lib/js/globalize.min.js"></script>
    <script src="js/chart/Lib/js/dx.chartjs.js"></script>


    <script type="text/javascript" src="js/chart/Lib/js/dx.chartjs.js"></script>

    <script type="text/javascript" src="js/main2.js"></script>

  <script type="text/javascript">
      $(function ()  
        {
           $("#chartContainer").dxRangeSelector({
            margin: {
                top: 50
            },
            size: {
                height: 210
            },
            scale: {
                minorTickInterval: 0.001,
                majorTickInterval: 0.005,
                label: {
                    format: "fixedPoint",
                    precision: 3
                }
            },
            sliderMarker: {
                format: "fixedPoint",
                precision: 4,
                customizeText: function () {
                    return this.valueText + " mg/L";
                }
            },
            behavior: {
                snapToTicks: false
            },
            dataSource: [0.01564, 0.04976, 0.004563, 0.02258, 0.01051, 0.03214, 0.02906]
           });

            $("#chartContainer2").dxRangeSelector({
            margin: {
                top: 50
            },
            size: {
                height: 210
            },
            scale: {
                minorTickInterval: 0.001,
                majorTickInterval: 0.005,
                label: {
                    format: "fixedPoint",
                    precision: 3
                }
            },
            sliderMarker: {
                format: "fixedPoint",
                precision: 4,
                customizeText: function () {
                    return this.valueText + " mg/L";
                }
            },
            behavior: {
                snapToTicks: false
            },
            dataSource: [0.01564, 0.04976, 0.004563, 0.02258, 0.01051, 0.03214, 0.02906]
           });
        }
      );
    </script>

</head>
<body >
    <div>
    	<div id="jpId"></div>
  		<button id="omg">play</button>
      <div id="chartContainer" style="width: 100%; "></div>
      <div id="chartContainer2" style="width: 100%; "></div>
    </div>
</body>