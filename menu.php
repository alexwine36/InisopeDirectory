
<div class="top-bar" id="menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Inisope, Inc.</li>
      
      <li><a href="/home.php">Home</a></li>
      <li><a href="/about.php">About</a></li>
      
      <?php
      if(!isset($_SESSION['user'])) {
              
      } else {
         if($_SESSION['access'] > 1) {
          echo "<li><a href='/grocery_crud/index.php/welcome/employees'>Database</a></li>";
        }
        echo "<li><a href='/logout.php'>Logout</a></li>";
       
      }
   ?>
      
    </ul>
  </div>
        <?php
      if(!isset($_SESSION['user'])) {
        
        echo "<div class='top-bar-right'><ul class='menu'>";
        echo "<li><a href='/login.php'>Employee Login</a></li>";
      echo "<li><a href='/register.php'>Register</a></li></div>";

        
//       echo "<li><a href='/login.php'>Login</a></li>";
    } else {
        
        echo "<div class='top-bar-right'>
    <form action='/search_db.php' method='post'>
      <ul class='menu'>
        <li><input type='search' placeholder='Search' name='search'></li>
        <li><button type='submit' class='button'>Search</button></li>      
      </ul>
    </form>
  </div>";
      }
   ?>

  
</div>
<?php
// $dir = getcwd();
//     $a = scandir($dir);
//     echo count($a);
//     echo '<br>';
//     print_r($a);
  require 'connect_db.php'


?>