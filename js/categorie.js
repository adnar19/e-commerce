
var liste =[];


function Actualiser() {
  $.ajax({
    dataType: "json",
    url: 'json/categorie.php',
    success: function(resultats){

      liste=resultats;
      AfficherResultats();
console.log(resultats);

    }
  });
}

function AfficherResultats() {
  var html ='' ;
  for (var i = 0; i < liste.length; i++) {
    html +='<img src="'+liste[i].photo+'" class="card-img-top" ><div class="card-body"><h5 class="card-title">'+liste[i].nom+'</h5><p class="card-text">'+
    liste[i].description+'</p>';
  }

  $('#res').html(html);
}

$(document).on("ready",Actualiser());
