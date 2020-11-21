<!DOCTYPE html>
<html>
	<head>
		<title>OpenStreetMap</title>
		<meta charset="utf-8">

		<!-- Importations d'OSM -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   		integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   		crossorigin=""/>
   		<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   		integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   		crossorigin=""></script>

   		<style type="text/css">
   			p {
   				line-height: 10%;
   			}

   			#myMap {
   				border: 1px solid black;
   				border-radius: 5px;
   			}
   		</style>
	</head>

	<body>
		<h1>La carte</h1>

		<form>
			<select>	</select>
		</form>

		<div id="myMap" style="height:800px; width:1200px">
			
		</div>

		<script type="text/javascript" src="addPoint.js"></script>
		<script type="text/javascript" src="getData.js"></script>
		<script type="text/javascript">
			
			map = L.map('myMap').setView([48.730756, 2.27137], 15);

			L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {

               attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
               minZoom: 13,
               maxZoom: 25

            }).addTo(map);

			// On ajoute les points sur la carte que l'on récupère dans une variable locale "value" et en l'implémentant dans la fonction addPoint
			getData().then(value => addPoint(value));

		</script>
	</body>
</html>
