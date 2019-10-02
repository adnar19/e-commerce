
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
  html +='<tr onclick="setTr(this)" data-id="'+liste[i].id+'" ><td>'+liste[i].id+'</td><td>'+liste[i].nom+'</td><td>'+liste[i].prenom+'</td><td>'+liste[i].tel+'</td></tr>';
   
  }

  $('#res').html(html);
}
