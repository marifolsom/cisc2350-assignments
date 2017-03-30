<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP Intro</title>
</head>

<body>
  <?php
    $name = "Marisa Folsom";
    define ("MY_NAME", $name);
    $birthday = "August 11, 1995";
    $city = "New York City";
   ?>

  <h1><?php echo MY_NAME; ?></h1>

  <h2><?php echo "FAVORITE FOODS"; ?></h2>
    <?php $favorite_foods = array("Ramen", "Mashed Potatoes", "Donuts", "BBQ Sauce", "Gummy Worms"); ?>
    <ol>
      <li><?php echo $favorite_foods[0]; ?></li>
      <li><?php echo $favorite_foods[1]; ?></li>
      <li><?php echo $favorite_foods[2]; ?></li>
      <li><?php echo $favorite_foods[3]; ?></li>
      <li><?php echo $favorite_foods[4]; ?></li>
    </ol>

  <h2><?php echo "CLASSES TAKEN" ?></h2>
    <?php $classes_taken = array("VART1124" => "Photography I & II", "VART2003" => "Digital Design and Graphic Tools", "VART2500" => "Typography and Design", "VART2700" => "Logos, Branding, and Presentation"); ?>
    <ul>
      <li><?php echo $classes_taken["VART1124"] ?></li>
      <li><?php echo $classes_taken["VART2003"] ?></li>
      <li><?php echo $classes_taken["VART2500"] ?></li>
      <li><?php echo $classes_taken["VART2700"] ?></li>
    </ul>

  <h2><?php echo "ACADEMIC CREDITS" ?></h2>
    <?php
      $earned_credits = "143";
      $total_credits = "124";
      $credits_needed = $total_credits - $earned_credits;
      if ($earned_credits >= 18 && $earned_credits < 42) {
        $classification_year = "freshman";
      } elseif ($earned_credits >= 42 && $earned_credits < 69) {
        $classification_year = "sophomore";
      } elseif ($earned_credits >= 69 && $earned_credits < 99) {
        $classification_year = "junior";
      } elseif ($earned_credits >= 99) {
        $classification_year = "senior";
      }
      define ("YOUR_CLASSIFICATION_YEAR", $classification_year)
      ?>
    <p><?php echo "Total credits to graduate from Fordham University: $total_credits";
      echo '<br>';
      echo "Earned credits: $earned_credits";
      echo '<br>';
      echo "Credits left to take: $credits_needed"; // I'm graduating in May, so I actually already have more than the credits required to graduate!
      echo '<br>';
      echo 'I am classified as a ' . YOUR_CLASSIFICATION_YEAR . ".";
      ?>
    </p>
</body>
</html>
