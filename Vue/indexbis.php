

<!DOCTYPE html>
<html lang="fr">
<head>

<title>Test geocalisation</title>

</head>


<body> 




<form>

  Tapez une adresse : <br/>

  <input type="text" id="adresse" style="width:400px"/>
  <input type="button"  value="Localiser sur Google Map" onclick="codeAddress();"/>

</form>

<span id="text_latlng"></span>

<div id="map-canvas" style="float:right;height:350px;width:85%;margin-left:5px;">



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&language=fr"></script>

<script type="text/javascript">

var tableauMarqueurs = [
        
        { lat:43.310309, lng:5.484457 }

         ,{ lat:43.320309, lng:5.374457 },
         { lat:43.300309, lng:5.594457 }
      ];


var locations = [
      ["William bois le roi"],
      ["Amaury bois le roi"],
      ["jean fontainebleau"],
      ["paul paris"]
    ];


var tabMarkers = new Array();


var zoneMarqueurs = new google.maps.LatLngBounds();

var geocoder;
var map;

var imageMarqueur = {
  url: ('bonhomme_2.png'),
  size: new google.maps.Size(55, 60),
  anchor: new google.maps.Point(28, 80)
};


var infowindow = new google.maps.InfoWindow();


function initialize() {

  geocoder = new google.maps.Geocoder();

  //Centre sur marseille au debut
  var latlng = new google.maps.LatLng(43.295309,5.374457);
  var mapOptions = {
    zoom: 14,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }

  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

 // marqueur sur marseille
  var marqueur = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(43.295309,5.374457),
          title: map.getCenter().toUrlValue(),
          icon: imageMarqueur,
          draggable: true
      });


// Click et affichage info du marqueur
 google.maps.event.addListener(marqueur, 'click', (function(marqueur, i) {
        return function() {
          infowindow.setContent("phil rouen");

          infowindow.open(map, marqueur);
        }
      })(marqueur, i));

       
  zoneMarqueurs.extend( marqueur.getPosition() );


  //Affichage autres marqueurs aux environs de marseille
  for( var i = 0, I = tableauMarqueurs.length; i < I; i++ ) {
       
         // ajouteMarqueur( tableauMarqueurs[i] );
        var latitude = tableauMarqueurs[i].lat;
        var longitude = tableauMarqueurs[i].lng;
        
        var optionsMarqueur = {
          map: map,
          position: new google.maps.LatLng( latitude, longitude ),
          title: map.getCenter().toUrlValue(),
          icon: imageMarqueur,
          draggable: true
        };

        var marqueur1 = new google.maps.Marker(optionsMarqueur);
        

          
        // click sur les marqueurs
      google.maps.event.addListener(marqueur1, 'click', (function(marqueur1, i) {
        return function() {
          infowindow.setContent(locations[i][0]);

          infowindow.open(map, marqueur1);
        }
      })(marqueur1, i));

      // affiche position des marqueurs
      marqueur1.setTitle( marqueur1.getPosition().toUrlValue() );
  
      // marqueur.setOptions(optionsMarqueur);
      zoneMarqueurs.extend( marqueur1.getPosition() );
  
  }

  
   google.maps.event.addListener( marqueur, "position_changed", function( evenement ) {
    console.log("event");
      marqueur.setTitle( marqueur.getPosition().toUrlValue() );
     });


   //Affiche les marqueurs
  map.fitBounds( zoneMarqueurs );

  
}

function codeAddress() {

  var  zoneMarqueursbis = "";

  zoneMarqueursbis = new google.maps.LatLngBounds();  

  console.log("codeAddress");
  var adresse = document.getElementById('adresse').value;
 
  geocoder.geocode( { 'address': adresse}, function(results, status) {
    
    if (status == google.maps.GeocoderStatus.OK) {
      
    
      map.setCenter(results[0].geometry.location);
      console.log(results[0].geometry.location);
     
   
      var strposition = results[0].geometry.location+"";
      //console.log(strposition);
      
      strposition=strposition.replace('(', '');
      strposition=strposition.replace(')', '');
      //console.log(strposition);

      //console.log(map);
      var latitude = results[0].geometry.location.G;
       var longitude = results[0].geometry.location.K +0.5;

      var mapOptions = {
          zoom: 14,
          center: new google.maps.LatLng(latitude,longitude),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
           title: map.getCenter().toUrlValue(),
           icon: imageMarqueur,
          draggable: true

     }

         map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      
      document.getElementById('text_latlng').innerHTML='coordonnees : '+strposition;
    //$("#LatLng").value(results[0].geometry.location);    


    //marqueur sur l'adresse entree
      var marqueur = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
           title: map.getCenter().toUrlValue(),
           icon: imageMarqueur,
          draggable: true

      });
      
      marqueur.setTitle( marqueur.getPosition().toUrlValue() );
    var i;

    i=0;

    // Click sur le marqueur et affichage infobulle
    google.maps.event.addListener(marqueur, 'click', (function(marqueur, i) {
        return function() {
          infowindow.setContent("phil rouen");

          infowindow.open(map, marqueur);
        }
      })(marqueur, i));


       zoneMarqueursbis.extend( marqueur.getPosition() );


       // On definit d'autres marqueurs (2 autres) aux environs de l'adresse
       var latitude = results[0].geometry.location.G +0.5;
       var longitude = results[0].geometry.location.K +0.5;

       console.log(latitude);
       console.log(longitude);
       
       /*var optionsMarqueur = {
          map: map,
          position: new google.maps.LatLng( latitude, longitude )
        };*/

         var marqueur = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng( latitude, longitude ),
            title: map.getCenter().toUrlValue(),
             icon: imageMarqueur,
            draggable: true

         });

           marqueur.setTitle( marqueur.getPosition().toUrlValue() );

      i=1;
      google.maps.event.addListener(marqueur, 'click', (function(marqueur, i) {
        return function() {
          infowindow.setContent("jean rouen");

          infowindow.open(map, marqueur);
        }
      })(marqueur, i));


        zoneMarqueursbis.extend( marqueur.getPosition() );
  
      var latitude1 = results[0].geometry.location.G +0.3;
       var longitude1 = results[0].geometry.location.K +0.3;

       console.log(longitude1);
       console.log(latitude1);

          var marqueur = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng( latitude1, longitude1 ),
             title: map.getCenter().toUrlValue(),
             icon: imageMarqueur,
          draggable: true


         });

           marqueur.setTitle( marqueur.getPosition().toUrlValue() );

           i=2;
        google.maps.event.addListener(marqueur, 'click', (function(marqueur, i) {
        return function() {
          infowindow.setContent("nat rouen");

          infowindow.open(map, marqueur);
        }
      })(marqueur, i));

      zoneMarqueursbis.extend( marqueur.getPosition() );

       map.fitBounds( zoneMarqueursbis );
  
    } 
    else 
    {
      alert('Adresse introuvable: ' + status);
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>




</body>
</html>