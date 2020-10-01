
/*

      ./www/js/posts/show.js

*/

$(function() {

  $('.editable').dblclick(function() {  // Capturer les éléments qui ont un class editable
    let contenu = $(this).html(); // $(this) = l'élément sur lequel je viens de cliquer
                                  // .html = au cas ou il y a des balises html dans .editable, je les prends
                                  // let contenu = le texte sélectionné avec le dblclick
    let code;

    switch ($(this).attr('data-type')) { // En fonction de l'attribut 'data-type'
      case 'text':
        code = '<input type="text" class="input" />';
        break;

      case 'textarea':
        code = '<textarea class="input" ></textarea>';
        break;
    }
    $(this).html(code).find('.input').val(contenu);  // Remplacer le contenu par le contenu code dans un input
    });                                              // .html(code) = Remplacer le texte sélectionné par $code
                                                     // .find('input') = Chercher l'input (trouvé grace à la class="input")
                                                     // .val = Ajouter $contenu de base dans l'input


//  $('.input').blur(function() { // .blur() = lévènement qui va s'exécuter lorsque l'élément perd le focus
  $('main').on('blur', '.input', function() {   //  $('')   = le sélecteur qui contient tous les éléments à venir
                                                //  1er ''  = l'évenement ,
                                                //  2e  ''  = le sélecteur qu'on doit rendre interactif,
    let that = $(this);
     $.ajax({ // Transaction ajax
      url: '?ajax=updateField', // Va passer par ajax updateField
      data: { // J'envois les données
        id: $(this).closest('.post-details').attr('data-id'), // (l'id du plus proche post-details)
        field: $(this).closest('.editable').attr('data-field'),
        value: $(this).val()
      },
      method: 'get', // Par la methode get
      success: function(reponsePHP) { // (Je recupère 0 ou 1 de la requête)
        if (reponsePHP == 1) {
          let contenu = that.val(); // Ce qu'il y a dans l'input
          that.closest('.editable').html(contenu);
          notify('Modification sauvegardée!', 'success');
        }
        else {
          notify('Problème durant la sauvegarde..', 'danger');
        }
      },
      error: function() {
        alert("Problème durant la transaction");
      }
    });
  });

});
