<!-- <?php

      if (!empty($_GET)) var_dump($_GET);

      if (!empty($_POST)) var_dump($_POST);

      ?> -->

<h2>Contact</h2>

<form method="post" action="process.php">
  <div><label for="fullName">Full Name:</label>
    <input type="text" name="fullName" id="fullName">
  </div>
  <div><label for="contact">Contact Type</label>
    <input type="radio" name="contact" id="consultation" value="consultation"> <label for="consultation">Consultation</label>
    <input type="radio" name="contact" id="question" value="question"> <label for="question">Question</label>
    <input type="radio" name="contact" id="greeting" value="greeting"> <label for="greeting">Greeting</label>
  </div>

  <div><label for="message">Message:</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
  </div>

  <div>
    <input type="checkbox" name="topics[]" id="HTML" value="HTML"> <label for="HTML">HTML</label>

    <input type="checkbox" name="topics[]" id="C#" value="C#"> <label for="C#">C#</label>

    <input type="checkbox" name="topics[]" id="JavaScript" value="JavaScript"> <label for="JavaScript">JavaScript</label>

    <input type="checkbox" name="topics[]" id="PHP" value="PHP"> <label for="PHP">PHP</label>
  </div>

  <div>
    <button type="submit">Submit</button>
  </div>
</form> 