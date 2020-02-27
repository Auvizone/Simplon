$(document).ready(function () {
  $("#humphrey").click(function(){
    $.ajax({
      url: "bdd.php",
      success: function (reponse){
        $("#quote").html(reponse)
      }
      });
  });

  });





