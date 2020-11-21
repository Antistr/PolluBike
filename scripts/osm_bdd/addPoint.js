function addPoint(points)
{
	// Paramètres des cercles
	var circleRadius = 5	;

	// On ajoute les points
	for (var point in points)
	{
		var id = points[point].id;
		var lat = points[point].lat;
		var lon = points[point].lon;
		var pm10 = points[point].pm10;
		var pm25 = points[point].pm25;
		var timestamp = points[point].timestamp;
		timestamp = formatTms(timestamp);

		//console.log(id + " :  (" + lat + ";" + lon + ") => " + pm10 + " - " + timestamp);
		var circle = null;
		var statut = null;
		if (pm10 > 10)
		{
			statut = "Pollué";
			circle = L.circle([lat, lon], {
	    		color: 'red',
	    		fillColor: '#f03',
	    		fillOpacity: 0.5,
	    		radius: circleRadius
			}).addTo(map);
		}
		else
		{
			statut = "Correct";
			circle = L.circle([lat, lon], {
	    		color: '#1ACD0C',
	    		fillColor: '#1ACD0C	',
	    		fillOpacity: 0.5,
	    		radius: circleRadius
			}).addTo(map);			
		}

		const popup = "<strong><center>Mesures du : " + timestamp + "</center></strong>" + 
		"<center><p>PM1.0 : " + pm10 + "</p></center>" +
		"<center><p>Statut : " + statut + "</p></center>";

		circle.bindPopup(popup);
	}
}

// Fonction qui formate le timestamp
function formatTms(timestamp)
{
	var day = timestamp.substring(0, 2);
	var month = timestamp.substring(2, 4);
	var year = timestamp.substring(4);

	return day + "/" + month + "/" + year;
}