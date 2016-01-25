<?php
session_start();
if(!isset($_SESSION['user'])){
  header('Location: /login.php');


}
else if(isset($_SESSION['user'])!=""){
  session_destroy();
  unset($_SESSION['user']);
  unset($_SESSION['department']);
  header('Location: /home.php');
}

if(isset($_GET['logout'])){
  header('Location: /login.php');
  session_destroy();
  unset($_SESSION['user']);

}

?>