<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Consultas CDMX</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="leaflet.css">

  <style>
    #map {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
    .icon{
            height: 20px; 
            width: 18px; 
            position: relative; 
            
        }
        .icon-download{
            height: 30px; 
            width: 30px; 
            position: relative;            
        }
        .divButton-download{
            border: 2px solid red;
            border-radius: 5px;
        }
        .divButton{
            position: relative;
            padding: 4px;
            z-index: 1000;
            text-align: right;
            top: 110px;
        }
        .button{
            background-color: white;
        }
  </style>
</head>

<body>

  <div id="map"></div>
  <div class="divButton">
            <button id="csv" class="button leaflet-control leaflet-bar">
                <img class="icon" src="images/eraser.png" alt="">
            </button>
  </div>

</body>
<script src="jquery.min.js"></script>
<script src="leaflet.js"></script>
<script src="app_r.js"></script>

</html>