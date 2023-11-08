<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="shawarma | Register"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#receivers">The Shawarma Lover</a>
              </li>
            </ul>

    <div class="tab-content">

       


       <div class="tab-pane container fade" id="receivers">

         <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="rname" placeholder="Name" class="form-control mb-3" required>
         
          <input type="text" name="rcity" placeholder="City" class="form-control mb-3" required>
          <input type="tel" name="rphone" placeholder="Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Mobile no. must start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="remail" placeholder="Email" class="form-control mb-3" required>
          <input type="password" name="rpassword" placeholder="Password" class="form-control mb-3" required minlength="6">
          <input type="submit" name="rregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

       </div>
    </div>
    <a href="login.php" class="text-center mb-4" title="Click here">Already have account?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>