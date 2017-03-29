<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP Intro</title>
</head>

<body>
  <?php
    $name = "Marisa Folsom";
    define("MY_NAME", "Marisa Folsom");
    $birthday = "August 11, 1995";
    $food1 = "Ramen";
    $food2 = "Mashed Potatoes";
    $food3 = "Donuts";
    $food4 = "BBQ Sauce";
    $food5 = "Gummy Worms";
    $class1 = "Photography I & II";
    $class2 = "Digital Design and Graphic Tools";
    $class3 = "Typography and Design";
    $class4 = "Logos, Branding, and Presentation";
   ?>

  <h1><?php echo MY_NAME; ?></h1>

  <h2><?php echo "FAVORITE FOODS"; ?></h2>
    <ol>
      <li><?php echo $food1; ?></li>
      <li><?php echo $food2; ?></li>
      <li><?php echo $food3; ?></li>
      <li><?php echo $food4; ?></li>
      <li><?php echo $food5; ?></li>
    </ol>

  <h2><?php echo "CLASSES TAKEN" ?></h2>
    <ul>
      <li><?php echo $class1 ?></li>
      <li><?php echo $class2 ?></li>
      <li><?php echo $class3 ?></li>
      <li><?php echo $class4 ?></li>
    </ul>
</body>
</html>
