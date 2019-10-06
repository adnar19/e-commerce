
var liste =[];


function Actualiser() {
  $.ajax({
    dataType: "json",
    url: 'json/produitss.php',
    success: function(resultats){
      alert(resultats);
      liste=resultats;
      AfficherResultats();
    }
  });
}

function AfficherResultats() {
  var html ='' ;
  for (var i = 0; i < liste.length; i++) {




      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>






    html +='<img src="'+liste[i].photo+'" class="card-img-top" ><div class="card-body"><h5 class="card-title">'+
    liste[i].nom+'</h5><p class="card-text">'+liste[i].description +'</p>';
  }

  $('#res').html(html);
}

$(document).on("ready",Actualiser());
