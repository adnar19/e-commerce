
var liste =[];



  function AfficherResultats() {

  $.ajax({
    dataType: "json",
    url: 'json/categorie.php',
    success: function(resultats){
console.log(resultats);
      liste=resultats;
    }
  });



  var html = '';

  for (var i = 0; i < liste.length; i++) {
  html +='<tr><td>'+liste[i].id+'</td><td>'+liste[i].nom+'</td><td>'+liste[i].description+'</td></tr>';
   i++;
  }

  $('#res').html(html);
}


  AfficherResultats();
