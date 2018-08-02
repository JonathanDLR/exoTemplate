

  /*-------------------------------------------------------------------------------
    PRE LOADER
  -------------------------------------------------------------------------------*/

  $(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets
  });



  /* HTML document is loaded. DOM is ready.
  -------------------------------------------*/

  $(document).ready(function() {


  /*-------------------------------------------------------------------------------
    Navigation - Hide mobile menu after clicking on a link
  -------------------------------------------------------------------------------*/

    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


    $(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
  });



  /*-------------------------------------------------------------------------------
    jQuery Parallax
  -------------------------------------------------------------------------------*/

    function initParallax() {
    $('#home').parallax("100%", 0.1);
    $('#about').parallax("100%", 0.3);
    $('#service').parallax("100%", 0.2);
    $('#experience').parallax("100%", 0.3);
    $('#education').parallax("100%", 0.1);
    $('#quotes').parallax("100%", 0.3);
    $('#contact').parallax("100%", 0.1);
    $('footer').parallax("100%", 0.2);

  }
  initParallax();



  /*-------------------------------------------------------------------------------
    smoothScroll js
  -------------------------------------------------------------------------------*/

    $(function() {
        $('.custom-navbar a, #home a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 49
            }, 1000);
            event.preventDefault();
        });
    });



  /*-------------------------------------------------------------------------------
    wow js - Animation js
  -------------------------------------------------------------------------------*/

  new WOW({ mobile: false }).init();

});

/*-------------------------------------------------------------------------------
  ajax
-------------------------------------------------------------------------------*/
function envoiView() { // ENVOI DE LA VIEW CLIQUE PAR USER
  var view = $(this).attr("name"); // ON RECUP ATTR NAME
  $.post(
    'backend/TextManager.php',
    {
      view: view // ON ENVOI VIEW
    },
    function success(data) {
      $('#formAdmin').empty(); // ON VIDE TOUS LES CHAMPS DE FORMADMIN
      var response = jQuery.parseJSON(data);
      for (var i in response) { // BOUCLE CREATION ELEM HTML
        $('<div>').appendTo($('#formAdmin'));

        $('<p>', {
          text: i
        }).appendTo($('div:last'));

        $('<input>', {
          type: 'text',
          value: response[i],
          dataView: view,
          dataType: i,
          class: 'inp'
        }).insertAfter($('p:last'));

        $('<button>', {
          class: 'type',
          text: 'Valider'
        }).insertAfter($('.inp:last'));
      }
      $('.type').on('click', envoiType); // ON AJOUTE UN EVENT SUR CHAQUE BOUTON TYPE
    }
  )
}

$('#menuAdmin > button').on('click', envoiView);

function envoiType() { // ENVOI DU CONTENU MODIFIE PAR USER
  var view = $(this).prev('input:last').attr("dataview");
  var type = $(this).prev('input:last').attr("datatype");
  var contenu = $(this).prev('input:last').val();

  $.post(
    'backend/admin/AdminTextManager.php',
    {
      view: view,
      type: type,
      contenu: contenu
    },
    function success() {
      alert("Champ mis à jour!");
    }
  )
}

function retourAccueil() {
  window.location.href = "http://192.168.3.125/jdlr/300718/index.php";
}

$('.BUTaccueil').on('click', retourAccueil);
