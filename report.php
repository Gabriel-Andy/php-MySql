
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Aliens Abducted me - Report an Abducted</title>
 </head>
 <body>
     <h2>Aliens Abducted me - Report an Abducted</h2>
      <?php
$when_it_happened = $_POST["whenithappend"];
$how_long = $_POST["howlong"];
$alien_description = $_POST["description"];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];

echo 'thanks for submitting the form. <br/>';
echo' you were abducted ' .$when_it_happened;
echo'and were gone for' . $how_long. '<br/>';
echo 'Describe them '. $alien_description . '<br/>';
echo 'was Fang there?'. $fang_spotted. '<br/>';
echo 'was email address is' . $email;
?>
 </body>
 </html>