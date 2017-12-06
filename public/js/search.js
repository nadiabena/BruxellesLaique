$(document).ready(function(){

  $("#recherche").keyup(function(){
    var recherche = $(this).val();
    var key = 'lettres=' + recherche;
      if (recherche.length >= 0) {

        $.ajax({
          type : "GET",  //POST? 
          url : "SearchPersonneController@autocomplete",
          data : key,
          success : function(server_response){
            $("#resultat").html(server_response).show();
            $("#resultat").addClass("resultat");
          }
        });
      }
  });

  $("#recherche").focusout(function(){
    setTimeout(function(){
    $("#resultat").empty();
    $("#resultat").removeClass('resultat'); }, 100);
  });
});




function recuperer_input(elem, e){
    e.preventDefault();
    // var url = document.location.href;
    // var get = url.searchParams.get('id');
    var newId = elem.id;
    var contenu_p = elem.innerHTML;
    console.log(document.getElementById('recherche'));

    document.getElementById('recherche').value = contenu_p;
    document.getElementById('id_personne').value = newId;
    //document.getElementById('recherche').setAttribute("value",contenu_p);
}
