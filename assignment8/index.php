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

  <section>
  <h2><?php echo "FAVORITE FOODS"; ?></h2>
    <?php $favorite_foods = array("Ramen", "Mashed Potatoes", "Donuts", "BBQ Sauce", "Gummy Worms"); ?>
    <ol>
      <li><?php echo $favorite_foods[0]; ?></li>
      <li><?php echo $favorite_foods[1]; ?></li>
      <li><?php echo $favorite_foods[2]; ?></li>
      <li><?php echo $favorite_foods[3]; ?></li>
      <li><?php echo $favorite_foods[4]; ?></li>
    </ol>
  </section>

  <section>
  <h2><?php echo "CLASSES TAKEN" ?></h2>
    <?php $classes_taken = array("VART1124" => "Photography I", "VART2185" => "Photography II", "VART2003" => "Digital Design and Graphic Tools", "VART2500" => "Typography and Design", "VART2700" => "Logos, Branding, and Presentation"); ?>
    <ul>
      <li><?php echo $classes_taken["VART1124"]; ?></li>
      <li><?php echo $classes_taken["VART2185"]; ?></li>
      <li><?php echo $classes_taken["VART2003"]; ?></li>
      <li><?php echo $classes_taken["VART2500"]; ?></li>
      <li><?php echo $classes_taken["VART2700"]; ?></li>
    </ul>
  </section>

  <section>
  <h2><?php echo "ACADEMIC CREDITS" ?></h2>
    <?php
      $earned_credits = "143";
      $total_credits = "124";
      $credits_needed = $total_credits - $earned_credits;

      if ($earned_credits < 30) {
        $classification_year = "freshman";
      } elseif ($earned_credits >= 30 && $earned_credits < 60) {
        $classification_year = "sophomore";
      } elseif ($earned_credits >= 60 && $earned_credits < 92) {
        $classification_year = "junior";
      } elseif ($earned_credits >= 92) {
        $classification_year = "senior";
      }
      define ("YOUR_CLASSIFICATION_YEAR", $classification_year)
     ?>

    <p><?php
      echo 'I am classified as a ' . YOUR_CLASSIFICATION_YEAR . ".";
      echo '<br>';
      echo "I need $credits_needed credits to graduate."; // I'm graduating in May, so I actually already have more than the credits required to graduate, so the output comes out negative.
     ?>
    </p>
  </section>

<!--ASSIGNMENT 8-->
  <!--part 1: functions-->
  <section>
    <?php
      function get_student_year($credits_earned) {
        if ($credits_earned < 30) {
          $student_classification = "freshman";
        } elseif ($credits_earned >= 30 && $credits_earned < 60) {
          $student_classification = "sophomore";
        } elseif ($credits_earned >= 60 && $credits_earned < 92) {
          $student_classification = "junior";
        } elseif ($credits_earned >= 92) {
          $student_classification = "senior";
        }

        return $student_classification;
      }

      echo 'The student is classified as a ' . get_student_year(143);
     ?>
  </section>

  <section>
    <?php
      function get_grad_credits($credits_earned) {
        $credits_left = 124 - $credits_earned;

        return $credits_left;
      }

      echo 'The student has ' . get_grad_credits(143) . ' credits left to graduate.'; // Output is negative because I already have enough credits to graduate.
     ?>
  </section>

  <section>
    <?php
      function get_next_level($credits_earned) {
        if ($credits_earned < 30) {
          $level_up_credits = 30 - $credits_earned;
        } elseif ($credits_earned >= 30 && $credits_earned < 60) {
          $level_up_credits = 60 - $credits_earned;
        } elseif ($credits_earned >= 60 && $credits_earned < 92) {
          $level_up_credits = 92 - $credits_earned;
        } elseif ($credits_earned >= 92) {
          $level_up_credits = 124 - $credits_earned;
        }

        if ($credits_earned < 30) {
          $next_level = "sophomore";
        } elseif ($credits_earned >= 30 && $credits_earned < 60) {
          $snext_level  = "junior";
        } elseif ($credits_earned >= 60 && $credits_earned < 92) {
          $next_level  = "senior";
        } elseif ($credits_earned >= 92) {
          $next_level  = "graduate";
        }

        return array($level_up_credits, $next_level); // I looked up how to propagate an array in order to return multiple variables on Stackoverflow here: http://stackoverflow.com/questions/3451906/multiple-returns-from-function
      }

      echo 'The student needs ' . get_next_level(143)[0] . ' more credits to be classified as a ' . get_next_level(143)[1] . '.';
     ?>
  </section>

  <!--part 2 & 3: loops and built-in functions-->
  <section>
    <?php
      $students = array(
        'rick' => 124,
	      'morty' => 24,
	      'summer' => 48,
        'beth' => 75,
        'jerry' => 32,
        'bird_man' => 97
      );
     ?>

    <p> <?php
      foreach ($students as $name => $credits_earned) {
        echo ucfirst($name) . ' is classified as ' . get_student_year($credits_earned) . ' and has earned ' . $credits_earned . ' credits, and needs ' . get_grad_credits($credits_earned) . ' more credits to graduate. ' . 'To become a ' . get_next_level($credits_earned)[1] . ', ' . ucfirst($name) . ' needs ' . get_next_level($credits_earned)[0] . " more credits. \n <br/>";
        // I looked up how to make a string's first character uppercase here: http://php.net/manual/en/function.ucfirst.php
        // I looked up how to make line breaks in php here: http://stackoverflow.com/questions/12994769/how-to-add-a-line-break-within-echo-in-php
        // I'm getting a notice for an undefined valuable: next_level, but I'm not sure why it worked for Rick and Morty and then no one else?
        str_replace('_', ' ', $name); // Learned about str_replace here: http://php.net/manual/en/function.str-replace.php
      }
     ?>
    </p>
  </section>
</body>
</html>
