$(document).ready(function(){	
	
	/* ADD Meal */	
	$(".plus").click(function(){
		var element_resp = $($(this).siblings())[3];

		$("#resp").removeAttr("id");
		$(".activo").append('<div class="col-md-12 newLineMeal"><div class="col-md-5"><div class="row"><input type="text" id="comi" class="respuesta food" autocomplete="off" required="required"><div class="Foodajax"></div></div></div><div class="col-md-6"><div class="row"><input type="text" class="respuesta amount text-left" required="required"></div></div><div class="col-md-1"><i class="borrar fa fa-minus-circle" onclick="borrar_elemento(this);"></i></div></div>');		
		document.getElementById("comi").focus();
	});

	/* Search Food */
	$("body").delegate(".food", "keyup", function(){
		var string =  $(this).val();
		var element = $(this).next();

		$.ajax({
			url: BASE+'/ajax/findFoodByString',
		  	data: { "stringParam": string },
		  	success: function(data)
		  	{
		  		$(element).find(".row").remove();
		  		var result = jQuery.parseJSON(data);

		  		for(var test in result){
		  			$(element).append("<div class='row ajax clickvaloralime list-group-item list-group-item-success' nomeAlimento="+ result[test].FoodName +" idAlimento="+ result[test].FoodID +" >" + result[test].FoodName + ' Cal: ' + result[test].FoodCal + ' Carbo: ' + result[test].FoodCarbo + ' Prot: ' + result[test].FoodProtein +  ' Gord: ' + result[test].FoodFat + ' Referência: ' + result[test].FoodRefAmount + " </div>");			  			
		  		}
		  		$(element).fadeIn();						  
		  	}
		});	
	});

	/* Insert Food In Input */
	$(document).on('click', '.clickvaloralime', function(e) {
    	var nomeAlimento = $(this).attr("nomeAlimento");
    	var idAlimento	 = $(this).attr("idAlimento");
		var element 	 = $(this).next();

    	$(this).parents().eq(1).find(".food").val(nomeAlimento).attr("idAliment", idAlimento);

    	$(this).parent().fadeOut(); 
	});

	/* Submit Meal */
	$("body").delegate(".send", "click", function(){
		array = Array();
		$(".bloque_pregunta").each(function(){
			arrayShow = Array();
			$(this).find(".newLineMeal").each(function(){
				
				answer = {};
				answer.food 	  = $(this).find(".food").attr("idAliment");
				answer.amount 	  = $(this).find(".amount").val();
				arrayShow.push(answer);
			});

			objetoInfoGambi = {};

			array.push(arrayShow);
		});
		$('#str').val(JSON.stringify(array)); 
	});	

	/* Edit Meal */

	/* Insert Meal Ajax */
	$("body").delegate(".amount", "focusout", function(){
		 var foodID = $(this).parents().eq(2).find(".food").attr("idAliment");
		 var amount = $(this).val();
		 var mealID = $('.meal').attr("MealID")

		$.ajax({
			url: BASE+'/ajax/insertMealFood',
		  	data: { "FoodID": foodID, "MealID": mealID, "Amount": amount },
		  	success: function(data)
		  	{
		  	}
		});	
	});	


});

function deletar(element){
	console.log("oi");
	var idAlimento = $(element).parents(".newLineMeal").find(".food").attr("idAliment");

	$.ajax({
		url: BASE+'/Ajax/deleteMealFood',
	  	data: { "id": idAlimento },
	  	success: function(data)
	  	{
			$(element).parents(".newLineMeal").remove();		  
	  	}
	});	
}