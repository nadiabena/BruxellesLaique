$(document).ready(function(){

  $(".id_button").click(function(){
    //alert('coucou');
    var id = $(this).data('id');
    console.log('id: '+id);

        $.ajax({
          type : "GET",
          url : "personnes/"+id,
          data : id,
          success : function(server_response){
            alert(server_response);
            $("modal").html(server_response);
          }
        });
      
  });

});






function recuperer_input(elem, e){
    e.preventDefault();
    // var url = document.location.href;
    // var get = url.searchParams.get('id');
    var newId = elem.id;
    var contenu_p = elem.innerHTML;

    document.getElementById('recherche').value = contenu_p;
    document.getElementById('id_personne').value = newId;
}