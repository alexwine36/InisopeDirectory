<?php
  require 'header.php';
  $eid = $_POST["eid"];
  $lname = $_POST["lname"];

$sql = "SELECT EMPLOYEE_ID,FIRST_NAME, LAST_NAME, PHONE_NUMBER, EMAIL FROM EMPLOYEES WHERE LAST_NAME='{$lname}' AND EMPLOYEE_ID='{$eid}'";
  $result = $conn->query($sql);
$fname = "";
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
//   printf ("%d -- %s -- %s -- %s",$row["EMPLOYEE_ID"], $row["LAST_NAME"], $row["FIRST_NAME"], $row["PHONE_NUMBER"]);
    $fname = $row["FIRST_NAME"];
  }
    if ($result->num_rows == 0) {
    echo "0 results <br>";
    }
    
  }
  $conn->close();

if($fname === ""){
  echo "<h1>User not found</h1><br>";
  echo "<a href='/register.php'>Return</a>";
} else {
  echo "<h1>Create Login for ", $fname, " ", $lname, "</h1>";
  echo '<form action="/create_user.php" method="post">
  <label>
    Enter Password
    <input type="password" name="password" placeholder="Password" required="true">
  </label>
  <label>
    Confirm Password
    <input type="password" name="passconf" placeholder="Password Confirmation" required="true">
  </label>
  <input type="hidden" name="eid" value="', $eid ,'">
    <button type="submit" class="button">Submit</button>
</form>';
}
?>


 




<?php
  require 'footer.php';
?>