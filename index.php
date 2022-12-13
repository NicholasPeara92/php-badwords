<?php 
  $badword = $_GET['badword'];
  $paragraph = "Un insegnante di chimica con un cancro allo stadio terminale comincia a produrre e spacciare metanfetamina con un suo ex studente per assicurare un futuro alla famiglia.";
  $paragraph2 = str_replace($badword, "***", $paragraph);
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Badwords</title>
  </head>
  <body>
    <!-- lunghezza e paragrafo interi  -->
      <h2>Lunghezza: <?php echo strlen($paragraph); ?></h2>
      <p><?php echo $paragraph; ?></p>
      <!-- lunghezza e paragrafo modificati dalla variabile badword  -->
      <h2>Lunghezza: <?php echo strlen($paragraph2); ?></h2>
      <p><?php echo $paragraph2; ?></p>
  </body>
</html>