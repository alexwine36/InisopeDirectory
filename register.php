<?php
require 'header.php'
?>

<h1>Inisope Employee Registration</h1>

<form action="/registration.php" method="post">
  <label>
    Employee ID
    <input type="number" placeholder="Employee ID #" name="eid" required="true">
  </label>
  <label>
    Last Name
    <input type="text" placeholder="Last Name" name="lname" required="true">
  </label>
  <button type="submit" class="button">Submit</button>
</form>


<?php
  require 'footer.php'
?>