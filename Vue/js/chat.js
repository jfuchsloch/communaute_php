

$(document).ready(function(){



		
		setInterval(function(){

		$.ajax({
				type: "POST",
				dataType:"json"
			
			}).done(function(resultat)
			{   
				console.log(resultat.var);
				$("#ChatMessages").empty().append(resultat.var);	
				
			})} , 10000);


		/*$.ajax({
				type: "POST",
				dataType:"json"
			
			}).done(function(resultat)
			{   
				//console.log(resultat.var);
				$("#ChatMessages").empty().append(resultat.var);	

				
			});*/



			/*$.ajax({
				type: "GET",
				dataType:"json"
			
			}).done(function(resultat)
			{   console.log("ajax get fin");
				console.log(resultat.var);
				$("#ChatMessages").empty().append(resultat.var);	
				
			});*/

   
});