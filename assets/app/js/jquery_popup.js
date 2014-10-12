$(document).ready(function() {
   
    $("#login #cancel").click(function() {
        $(this).parent().parent().hide();
    });

    $("#employee_onclick").click(function() {
        $("#contactdiv").css("display", "block");
    });
	
	 $("#company_onclick").click(function() {
        $("#companydiv").css("display", "block");
    });
	 
	  $("#category_onclick").click(function() {
        $("#categorydiv").css("display", "block");
    });
	  
	    $("#product_onclick").click(function() {
        $("#productdiv").css("display", "block");
    });

    $("#contact #cancel").click(function() {
        $(this).parent().parent().hide();
    });
	
	$("#adtype_onclick").click(function() {
        $("#adtypediv").css("display", "block");
    });

});

 