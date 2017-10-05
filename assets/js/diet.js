$(document).ready(function(){

  /*Diet ADD */
  $(".pluss").click(function(){
     $(".new-field").append('<div class="col-md-12 newLine"><div class="col-md-5"><div class="row"><input type="text" id="comi" class="meal" autocomplete="off" required="required"><div class="Foodajax"></div></div></div><div class="col-md-1"><i class="borrar fa fa-minus-circle"></i></div></div>');
  });

  /*Diet Search Meal */
  $("body").delegate(".meal", "keyup", function(){
    var string =  $(this).val();
    var element = $(this).next();

    $.ajax({
      url: BASE+'/ajax/searchMeal',
        data: { "stringParam": string },
        success: function(data)
        {
          var result = jQuery.parseJSON(data);
          $(element).find(".row").remove();

          for(var test in result){
            console.log(result[test]);
            $(element).append("<div class='row ajax click list-group-item list-group-item-success' mealID="+ result[test].MealID +" nameMeal="+ result[test].MealName + ">"+ result[test].MealName +"</div>");            
          }
          $(element).fadeIn();
        }
    }); 
  });  

  /*Diet Add Result in Input */
  $(document).on('click', '.click', function() {
    var nameMeal     = $(this).attr("nameMeal");
    var mealID       = $(this).attr("mealID");

    $(this).parents().eq(1).find(".meal").val(nameMeal).attr("mealID", mealID);
    $(this).parent().fadeOut(); 
  });  

  /* Diet Delete Meal Line */
  $(document).on('click', '.borrar', function() {  
    $(this).parents(".newLine").remove();     
  });

  /* Diet Submit */
  $("body").delegate(".submit", "click", function(){
    Meal = Array();
    $(".new-field").each(function(){
       $(".newLine").each(function(){
         
          
           answer          = {};
           answer.meal     = $(this).find(".meal").attr("mealID");
           Meal.push(answer);
       });
     });
     $('#str').val(JSON.stringify(Meal)); 
  });  

  /*Diet Edit */   
  $(document).on('click', '.click', function(e) {
    var nameMeal  = $(this).attr("nameMeal");
    var mealID    = $(this).attr("mealID");
    var dietID    = $('.diet').attr('DietID');

    $(this).parents().eq(1).find(".meal").val(nameMeal).attr("mealID", mealID);
    $(this).parent().fadeOut();

    insert(dietID, mealID);
  });     

  /* Diet Insert Edit */
  function insert(dietID, mealID){
      $.ajax({
        url: BASE+'/ajax/insertDietMeal',
          data: { "DietID": dietID, "MealID": mealID},
          success: function(data)
          {
          }
      });
  }  
   
});

function deletar_elemento(element){
  var mealID =  $(element).parents().eq(1).find(".meal").attr("mealID");

   $.ajax({
     url: BASE+'/ajax/deleteDietMeal',
       data: { "id": mealID },
       success: function(data)
       {
          $(element).parents(".newLine").remove();     
       }
   }); 
}