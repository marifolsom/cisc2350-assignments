<DOCTYP html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP Intro</title>
</head>

<body>
  <?php
    $name = "Marisa";
    $age = "21";
    $city = "New York";
    define("MY_NAME", "Marisa");
   ?>

  <h1><?php echo "Hello!"; ?></h2>
  <h2><?php echo $name . " " . $age; ?></h2>
  <h3><?php echo $age; ?></h3>
  <h3><?php echo $city; ?></h3>
  <h3><?php echo MY_NAME; ?>
</body>
</html>
