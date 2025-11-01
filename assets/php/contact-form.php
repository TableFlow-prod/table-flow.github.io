<?php
 $to = "office@tableflow.pl";
 $subject = $_POST['subject'];
 $body = "From, ".$_POST['name']."\n\n"."Email, ".$_POST['email']."\n\n".$_POST['message'];
 if (mail($to, $subject, $body)) {
  $responseArray = array('class' => 'alert alert-success br-0 bg-gradient-2', 'message' => 'Wiadomość wysłana pomyślnie. Dziękujemy, wkrótce się z Tobą skontaktujemy!');
  } else {
$responseArray = array('class' => 'alert alert-danger br-0 bg-gradient-5', 'message' => 'Wystąpił błąd podczas przesyłania formularza. Spróbuj ponownie później.');
     
  }

    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;

 ?>