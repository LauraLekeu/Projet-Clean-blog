
/*

      ./www/js/posts/index.js

*/

$(function(){

    let offset = 4;

  $('#older-posts').click(function(e){

    e.preventDefault(); // Pour le calmer, qu'il ne remonte pas à chaque fois au haut de la page
    $.ajax({
      url: '?ajax=older-posts', // Tester l'existance d'une variable ajax
      data: {
        offset: offset // envoyer la variable offset
      },
      method: 'get',
      success: function(reponsePHP) { // Si ça s'est bien passé
        $('#liste-posts').append(reponsePHP)
                         .find('post-preview:nth-last-child(-n+4)')
                         .hide()
                         .fadeIn();
        // offset = offset + 4; Même chose que :
        offset += 4;
      },
      error: function() {
        alert("Problème durant la transaction");
      }
    });
  });
});
