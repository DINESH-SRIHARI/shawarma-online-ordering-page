<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="shawarma | Add blood samples"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  Page under Construction
</div>
</div>
<?php require 'footer.php' ?>
</body>
<?php } ?>
