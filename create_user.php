<?php
require 'header.php';

$pw = $_POST['password'];
$cpw = $_POST['passconf'];

if ($pw === $cpw){
  $eid = $_POST['eid'];
  
  $sql = "INSERT INTO USERS (EMPLOYEE_ID, PASSWORD)
  VALUES ('{$eid}', '{$pw}')";
  
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