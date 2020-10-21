<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>UjaTube</title>
  <link rel="shortcut icon" href="img/favicon.png" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="js/ruta.js"></script>
  <script src="js/video.js"></script>
  <link rel="stylesheet" href="css/video-js.css">
  <link rel="stylesheet" href="css/estilo.css">

</head>

<body style="background-color: #E7E7E7">
  <?php include 'header.php'; ?>

  <div class="jumbotron principal mb-0">
    <div class="container">
      <h1 class="display-5">¡Bienvenido a <img src="img/logo_small.png" width="350px"> !</h1>
      <br>
      <br>
      <p>Esta aplicación es un reproductor de video y audio para cualquier página web o usarlo de forma local</br>
        Solo tienes que buscar el video o audio que quieres reproducir en tu ordenador o movil</br>
        Formatos de video: mp4, web, ogg - Formatos de audio: mp3, wav
    </div>
  </div>
  <div class="row">
    <div class="col jumbo-izq" style="background-image: url('img/video-jumbotron.jpg'); background-attachment: fixed; padding: 0 !important">
      <div class="rojo" id="rojo">
        <center>
          <p class="titulocat">Reproducto de video</p>
          <center>
      </div>
    </div>
    <div class="col jumbo-der" style="background-image: url('img/audio-jumbotron.jpg'); background-attachment: fixed; background-repeat: no-repeat;background-position:60% 10%; padding: 0 !important">
      <div class="rojo2" id="rojo2">
        <center>
          <p class="titulocat">Reproductor de audio</p>
          <center>
      </div>
    </div>
  </div>
  <div class="container-fluid justify-content-center"><br>

    <div class="mx-auto" id="form-video" style="display: none; width: 40%;">
      <br><br>
      <div class="custom-file" id="input-file-video">
        <input type="file" class="custom-file-input" name="video" id="video-src" lang="es">
        <input type="hidden" name="oculto" id="oculto" value="">
        <label class="custom-file-label" for="customFileLang">Seleccionar Video</label><br><br>
      </div><br>
      <center><input type="button" class="btn btn-success" id="submit-video" value="Ver video" name="submit" disabled></center>
      <br><br>
    </div>

    <div class="mx-auto" id="form-audio" style="display: block; width: 40%;">
      <br><br>
      <div class="custom-file" id="input-file-audio">
        <input type="file" class="custom-file-input" name="video" id="video-src" lang="es">
        <input type="hidden" name="oculto" id="oculto" value="">
        <label class="custom-file-label" for="customFileLang">Seleccionar Audio</label><br><br>
      </div><br>
      <center><input type="button" class="btn btn-success" id="submit-audio" value="Escuchar audio" name="submit" disabled></center>
      <br><br>
    </div>

    <div class="mx-auto" id="video-screen" style="display: none;width: 40%;">
      <div id="video_container">
        <video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
          <source src="<?php print $src; ?>" type="video/mp4">
          <source src="<?php print $src; ?>" type="video/ogg">
          <source src="<?php print $src; ?>" type="video/webm">
          <source src="<?php print $src; ?>" type='video/x-matroska'>
          <source src="<?php print $src; ?>" type='video/mkv'>
        </video>
      </div>
      <br>
      <br>
    </div>

    <div class="mx-auto" id="audio-screen" style="display: none; width: 40%;">
      <div id="audio_container">
        <center><audio controls="controls" width="100%">
            <source src="<?php print $src; ?>" type="audio/ogg" />
            <source src="<?php print $src; ?>" type="audio/mpeg" />
          </audio></center>
      </div>
      <br>
      <br>
    </div>

  </div>
  </div>
</body>

</html>
