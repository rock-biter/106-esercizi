<?php

$text = 'È universalmente riconosciuto che un lettore che osserva il layout di una pagina viene distratto dal contenuto testuale se questo è leggibile. Lo scopo dell’utilizzo del Lorem Ipsum è che offre una normale distribuzione delle lettere (al contrario di quanto avviene se si utilizzano brevi frasi ripetute, ad esempio “testo qui”), apparendo come un normale blocco di testo leggibile. Molti software di impaginazione e di web design utilizzano Lorem Ipsum come testo modello. Molte versioni del testo sono state prodotte negli anni, a volte casualmente, a volte di proposito (ad esempio inserendo passaggi ironici).';

$replace = $_GET['replace_word'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sostituisci</title>
</head>

<body>

  <p><?php echo $text; ?></p>
  <p>Il texto è lungo: <?php echo strlen($text); ?> caratteri</p>
  <p>Texto senza spazi: <?php echo str_replace('Lorem Ipsum', $replace, $text); ?></p>

  <?php

  echo strlen(strtolower($text));

  ?>



</body>

</html>