<?php
require 'header.php';

$pw = $_POST['password'];
$cpw = $_POST['passconf'];


if ($pw === $cpw){
  $eid = $_POST['eid'];
  $did = $_POST['did'];
  
  if ($did == 1800 or $did == 2300){
    $access = 2;
  }elseif($did == 1100 or $did == 2100){
    $access = 3;
  }else{
    $access = 1;
  }
  
  $sql = "INSERT INTO USERS (EMPLOYEE_ID, PASSWORD, ACTIVE)
  VALUES ('{$eid}', '{$pw}', '{$access}')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<h1>New user created successfully</h1><br>";
    echo "<a href='/login.php'>Login</a>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
  
} else {
    echo"<script>

    alert('Passwords did not match');

</script>";


}
require 'footer.php';

?>