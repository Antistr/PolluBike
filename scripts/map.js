// On initialise la carte
var carte = L.map('maCarte').setView([48.852969, 2.349903], 13);

// On charge les "tuiles"
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    // Créditations sur la carte (obligatoire pour pouvoir utiliser OpenStreetMap)
    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
    minZoom: 5,
    maxZoom: 20
}).addTo(carte);

