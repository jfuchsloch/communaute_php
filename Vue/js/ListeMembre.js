
$(document).ready(function(){

 console.log("test");

   /* $.ajax({
        type: "GET",
        dataType:"json"
    }).done(function(resultat)
    {
        console.log("ajax fin");
    });*/

    /*setInterval(function(){

        $.ajax({
            type: "POST",
            dataType:"json"
        }).done(function(resultat)
        {
            console.log("ajax fin post");
            console.log(resultat);
            $("#lstNbConnectes").html("") ;
            $("#lstNbConnectes").empty().append(resultat.var);

        })} , 1000);*/



    setInterval(function(){

        $.ajax({
            type: "GET",
            dataType:"json"

        }).done(function(resultat)
        {
            console.log("ajax fin  get");
            console.log(resultat.var);

            $("#listeMembreConnectes").html("") ;
            $("#listeMembreConnectes").empty().append(resultat.var);
        })} , 1000);



    console.log("fin");

});