$(document).ready(function(){
    $("#jqueryanime").click(function(){
      $("#anime").show();
      var div = $("#anime");
      div.animate({height: '125px'});
      div.animate({width: '200px'});
      div.animate({fontSize: '2em'});
      $("#anime").hide(7000);
    });
  });