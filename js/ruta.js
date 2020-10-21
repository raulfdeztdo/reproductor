$(document).ready(function() {
  console.log( "DOM ready!" );
  // Escuchamos el evento 'change' del input donde cargamos el archivo
  $(document).on('change', 'input[type=file]', function(e) {
    // Obtenemos la ruta temporal mediante el evento
    var TmpPath = URL.createObjectURL(e.target.files[0]);
    // Adjudicamos la ruta temporal al video
    $('video').attr('src', TmpPath);
    $('audio').attr('src', TmpPath);
    $("#input-file-audio").css({"display": "none"});
    $("#input-file-video").css({"display": "none"});
    $('#submit-video').prop('disabled', false);
    $('#submit-audio').prop('disabled', false);

  });

  $( "#submit-video" ).click(function() {
    $("#form-video").css({"display": "none"});
    $("#form-audio").css({"display": "none"});
    $('#audio-screen').css({"display": "none"});
    $('#video-screen').css({"display": "block"});
  });

  $( "#submit-audio" ).click(function() {
    $("#form-audio").css({"display": "none"});
    $("#form-video").css({"display": "none"});
    $('#video-screen').css({"display": "none"});
    $('#audio-screen').css({"display": "block"});
  });

  $( "#rojo" ).click(function() {
    $("#form-audio").css({"display": "none"});
    $("#form-video").css({"display": "block"});
    $("#input-file-audio").css({"display": "none"});
    $("#input-file-video").css({"display": "block"});
    $('#submit-video').prop('disabled', true);
    $('#submit-audio').prop('disabled', true);
    $('#video-screen').css({"display": "none"});
    $('#audio-screen').css({"display": "none"});
  });

  $( "#rojo2" ).click(function() {
    $("#form-audio").css({"display": "block"});
    $("#form-video").css({"display": "none"});
    $("#input-file-audio").css({"display": "block"});
    $("#input-file-video").css({"display": "none"});
    $('#submit-video').prop('disabled', true);
    $('#submit-audio').prop('disabled', true);
    $('#video-screen').css({"display": "none"});
    $('#audio-screen').css({"display": "none"});
  });

});
