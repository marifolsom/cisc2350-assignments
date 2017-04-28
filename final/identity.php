<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Surface Level Identity</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <h1>S U R F A C E &nbsp; L E V E L</h1>
  </header>

  <ul class="nav">
    <li><a href="index.html">H O M E</a></li>
    <li><a href="portraits.html">P O R T R A I T S</a></li>
    <li><a href="about.html">A B O U T</a></li>
    <li class="current"><a href="identity.html">W H A T &nbsp; M A K E S &nbsp; A &nbsp; P E R S O N ?</a></li>
    <li><a href="https://surface-level.tumblr.com/" target="_blank">B L O G</a></li>
  </ul>

  <section>
    <h2>Thank You!</h2>
      <p>Here is what you have submitted:</p>
      <p>
        Comment: <?php echo $_POST["comment"]?>
        <br>Name: <?php echo $_POST["first-name"]?>
        <br>Age: <?php echo $_POST["age"]?>
      </p>
  </section>

  <footer>
    <p>E M A I L: &nbsp;<a href="mailto:mfolsom1@fordham.edu">marifolsom@gmail.com</a> &nbsp; | &nbsp; W E B S I T E: &nbsp;<a href="http://marisafolsom.format.com" target="_blank">marisafolsom.format.com</a></p>
  </footer>
</body>
</html>
