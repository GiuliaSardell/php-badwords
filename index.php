<?php

$text= 'Lorem ipsum dolor sit amet similique adipisicing elit. Temporibus commodi, aspernatur repudiandae nihil laudantium molestiae voluptatum dicta perferendis eveniet similique!';

$badWord = 'similique';



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2> <?php echo $text ?> </h2>
<h2> La stringa è lunga: <?php echo strlen($text) ?> caratteri </h2>
<!-- http://localhost/php-badwords/index.php?badWord=similique -->
<h2> La parola da censurare è: "<?php echo $_GET['badWord'] ?>" </h2>
<h2>
  <?php echo str_replace($badWord, '***', $text) ?>
</h2>


</body>
</html>