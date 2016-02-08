<?php


if(isset($_SESSION['user'])!=""){
  header('Location: /home.php');
}

require 'header.php';

if(isset($_POST['btn-login'])){
  $user_id = $_POST['uid'];
  $password = $_POST['pword'];
  echo $password;
  $sql = "SELECT EMPLOYEE_ID, PASSWORD, ACTIVE FROM USERS WHERE EMPLOYEE_ID='{$user_id}' AND PASSWORD='{$password}' AND ACTIVE > 0";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
//   printf ("%d -- %s -- %s -- %s",$row["EMPLOYEE_ID"], $row["LAST_NAME"], $row["FIRST_NAME"], $row["PHONE_NUMBER"]);
//      echo $row["EMPLOYEE_ID"], " - ", $row["ACTIVE"];
    $_SESSION['user'] = $row["EMPLOYEE_ID"];
    $_SESSION['access'] = $row["ACTIVE"];
//     header('Location: home.php');
  }
    if ($result->num_rows == 0) {
    echo "<script>alert('Wrong user information');</script>";
    }
    
  }
  $sql = "SELECT DEPARTMENT_ID FROM EMPLOYEES WHERE EMPLOYEE_ID='{$user_id}'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
//   printf ("%d -- %s -- %s -- %s",$row["EMPLOYEE_ID"], $row["LAST_NAME"], $row["FIRST_NAME"], $row["PHONE_NUMBER"]);
//      echo $row["EMPLOYEE_ID"], " - ", $row["ACTIVE"];
    $_SESSION['department'] = $row["DEPARTMENT_ID"];
    header('Location: home.php');
  }
    if ($result->num_rows == 0) {
    echo "<script>alert('Wrong user information');</script>";
    }
    
  }
  
  
  $conn->close();
}
?>

<h1>Login</h1>

<form action="/login.php" method="post">
  <label>
    Employee ID
    <input type="number" placeholder="Employee ID #" name="uid">
  </label>
  <label>
    Password
    <input type="password" placeholder="Password" name="pword">
  </label>
    <button type="submit" class="button" name="btn-login">Submit</button>
</form>


<?php
require 'footer.php';
?>