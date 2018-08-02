$( document ).ready(function() {

  $('#form1').fadeOut();

  $('#btn_siguiente').on('click', function(){
    $('#form1').slideToggle();

  });



});
