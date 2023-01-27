<?php

session_start();
include_once 'database.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Sign Up</title><title>Admin Dashboard</title><link rel="icon" href="../img/favicon2.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page bg-green">
<div class="login-box">
  <div class="login-logo">
    <a href="../"><b>SMS Student</b>Sign Up</a><br>
    <small style="text-align: center;font-size:50% !important"><b>Student management System</b></small>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign up to join your session</p>

    <form  method="post">
    <div class="form-group has-feedback">
        <input name="fname" type="text" class="form-control" placeholder="First Name">
      </div>
      <div class="form-group has-feedback">
        <input name="lname" type="text" class="form-control" placeholder="Last Name">
      </div>
    <div class="form-group has-feedback">
        <input name="uid" type="text" class="form-control" placeholder="Unique_id">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="dob" type="date" class="form-control" placeholder="DOB">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="address" type="text" class="form-control" placeholder="Address">
        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="p_id" type="text" class="form-control" placeholder="Parent-ID">
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="gender" type="text" class="form-control" placeholder="M or F">
        </div>
      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-12">
          <button name="submit" value="submit" type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <?php

    if (isset($_POST['submit'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $sid = $_POST['uid'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $addr = $_POST['address'];
      $gen = $_POST['gender'];
      $pid = $_POST['p_id'];

      if ($sid != '' && $email != '' && $fname != '') {
        
        $sql = "INSERT INTO student (sid, fname, lname, bday, address, parent, gender, email) VALUES ('$sid', '$fname', '$lname', '$bday', '$addr', '$pid', '$gen', '$email')";
        $query = $conn->query($sql);
        header('Location:login.php');
        }
        else{echo "<p style='width:100%;text-align;center'>Incorrect username or password</p>";}
    }

    ?>

   
    <!-- /.social-auth-links -->

   <br>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
