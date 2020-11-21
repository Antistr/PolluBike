<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" type="image/png" href="images/PolluBike-1.png">
    <meta charset="utf-8" />
    <title>PolluBike</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>


   <!-- CSS d'OpenStreetMap -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
   
   <!-- CSS d'HTML -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <link rel="stylesheet" type="text/css" href="Style.css">
  </head>

  <body>
    <!--en-tête-->
    <header>
        <img class="logo" src="images/PolluBike_logo_mini.png" alt="PolluBike" />
      <h1>PolluBike</h1>
    </header>

      <div class="flexbox">
        <main>
          <!--bannière-->
            <h2>PolluBike</h2>
    
          <!--contenu-->
            <p>Carte de la pollution à Massy</p>

          <!--on affiche la carte-->
            <div id="myMap"></div>

       <script type="text/javascript" src="scripts/osm_bdd/addPoint.js"></script>
       <script type="text/javascript" src="scripts/osm_bdd/getData.js"></script>
       <script type="text/javascript">
      
       map = L.map('myMap').setView([48.730756, 2.27137], 15);

       L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {

                // Créditations sur la carte (obligatoire pour pouvoir utiliser OpenStreetMap)
                 attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                 
                 minZoom: 13,
                 maxZoom: 25

              }).addTo(map);
                
       // On ajoute les points sur la carte que l'on récupère dans une variable locale "value" et en l'implémentant dans la fonction addPoint
       getData().then(value => addPoint(value));
        </script>
          
            <br/>
            <p class="explication">De nos jours, il est important de connaître le taux de pollution dans notre ville. Grâce au Pollubike, une invention de l'atelier scientifique du lycée parc de Vilgénis, c'est possible. Consultez notre carte afin de savoir où vous pourrez respirer l'air le plus pur possible !</p>
            
            <!--On ajoute le boutton de selection des PM-->
            <select name="choixPM">
              <option value="PM1">PM 1</option>
              <option value="PM25">PM 2,5</option>
            </select>
            
            <input class="refresh" type="button" onclick='window.location.reload(false)' value="Rafraichir"/>
        
        </main>
     </div>
    

    <!--Pied de page-->
    <footer>

    </footer>  

        <!-- Fichiers Javascript d'OpenStreetMap -->
      <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
      <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
  </body>
</html>