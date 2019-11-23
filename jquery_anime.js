$(document).ready(function(){
    $("#jqueryanime").click(function(){
      $("#anime").show();
      var div = $("#anime");
      div.animate({height: '150px'});
      div.animate({width: '200px'});
      div.animate({fontSize: '2em'});
      $("#anime").hide(10000);
    });
  });
$(document).ready(function(){
  $("#jqueryanime2").click(function(){
    $("#anime2").show();
    var div1 = $("#anime2");
    div1.animate({height: '125px'});
    div1.animate({width: '200px'});
    div1.animate({fontSize: '2em'});
    $("#anime2").hide(10000);
  });
});