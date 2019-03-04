<?php
include "signin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User</title>
</head>
<body>
  <h1>Welcome <?php echo $_SESSION['FullName']; ?></h1>
  <?php
if(isset($_SESSION['id'])){
  echo "<p>You are ". $_SESSION["FullName"] ."</p>";
  echo "<p> Department: ". $_SESSION['Department']   ."</p>";
  echo "<p> Faculty: ".$_SESSION['Faculty']  ."</p>";
}
  ?>
</body>
</html>