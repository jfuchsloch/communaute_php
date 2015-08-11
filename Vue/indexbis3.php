

<!DOCTYPE html>
<html lang="fr">
<head>

<title>Test geocalisation</title>

</head>


<body> 

 <script type="text/javascript">


if (navigator.geolocation)
{
  navigator.geolocation.getCurrentPosition(function(position)
  {
    alert("Latitude : " + position.coords.latitude + ", longitude : " + position.coords.longitude);
  });
}
else
  alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");

   
</script>




</body>
</html>