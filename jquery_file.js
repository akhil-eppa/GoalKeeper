$(document).ready(function(){ // For the goalkeeper symbol on the top of the page
    
        $("#logo_head").fadeOut();
        $("#logo_head").fadeIn("slow");

    $("#i1").on("mouseenter",function(){
        $("#i1").fadeOut();
        $("#i1").fadeIn("slow");
    }
    );
    $("#i2").on("mouseenter",function(){
        $("#i2").fadeOut();
        $("#i2").fadeIn("slow");
    });
    $("#i3").on("mouseenter",function(){
        $("#i3").fadeOut();
        $("#i3").fadeIn("slow");
    });
}
);
// i1,i2 and i3 for the remaining images on the webpage