<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

if (isset($_SESSION['username']) && !empty($_SESSION['username'])) 
{
   if (isset($_COOKIE['last_page']) && !empty($_COOKIE['last_page'])) 
   {
      header('Location: ' . $_COOKIE['last_page']);
      exit;
   }
} 
else 
{
   header('Location: login.php');
   exit;
}

?>
</body>
</html>