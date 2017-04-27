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
    <li class="current"><a href="identity.php">W H A T &nbsp; M A K E S &nbsp; A &nbsp; P E R S O N ?</a></li>
    <li><a href="https://surface-level.tumblr.com/" target="_blank">B L O G</a></li>
  </ul>

  <section>
    <h2>W H A T &nbsp; M A K E S &nbsp; A &nbsp; P E R S O N ?</h2>
    <p>Since identity is such a subjective thing, I'd love to hear what identity means to you!</p>
    <p>Feel free to leave any quotes, comments, or thoughts you might have around the subject of identity, and come back and update them as your thoughts change or you find more.</p>
  </section>

  <section>
    <form action="index.html" method="post">
      <fieldset> <!-- Fieldset element: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset -->
        <textarea placeholder="Add your thoughts, quotes, or comments here..."></textarea> <!-- Textarea element: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea, placeholder attribute: http://stackoverflow.com/questions/5021919/html-placeholder-text-in-a-textarea-form -->
      </fieldset>

      <fieldset>
				<label for="first-name"></label>
				<input type="text" name="first-name">

        <select name="age" id="age-dropdown">
          <option selected disabled>Age</option> <!-- I looked up how to disable an option in a dropdown list here: http://stackoverflow.com/questions/9447134/html-select-how-to-set-default-text-which-wont-be-shown-in-drop-down-list -->
          <option value="option1">Under 18</option>
  				<option value="option2">18-29</option>
  				<option value="option3">30-39</option>
          <option value="option4">40-49</option>
          <option value="option5">50-59</option>
          <option value="option6">60+</option>
          <option value="option7">I prefer not to say</option>
  			</select>
			</fieldset>

      <button type="submit" value="Submit">Submit</button>
    </form>
  </section>

  <footer>
    <p>E M A I L: &nbsp;<a href="mailto:mfolsom1@fordham.edu">marifolsom@gmail.com</a> &nbsp; | &nbsp; W E B S I T E: &nbsp;<a href="http://marisafolsom.format.com">marisafolsom.format.com</a></p>
  </footer>
</body>
</html>
