<!DOCTYPE html>
<html >
<?php
if (isset($this->session->userdata['logged_in'])) {

  header("location: http://localhost/login/index.php/User_Authentication/user_login_process");
}
?>
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/green/css/newcustom.css');?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/green/css/login.css');?>">

  
     

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<?php
if (isset($logout_message)) {
  echo "<div class='message'>";
  echo $logout_message;
  echo "</div>";
}
?>
<?php
if (isset($message_display)) {
  echo "<div class='message'>";
  echo $message_display;
  echo "</div>";
}
?>
  <div class="login">
    <h1>Login</h1>
    <?php
		echo "<div class='error_msg' style='margin-left: 77px;margin-top: 20px;margin-bottom: -15px;'>";
		if (isset($error_message)) {
			echo $error_message;
		}
		echo validation_errors();
		echo "</div>";
		?>
    <form class="form" method="post" action="<?php echo site_url('User_Authentication/user_login_process'); ?>">

      <p class="field">
        <input type="text" name="username" id="username" placeholder="Username" required/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
        <input type="password" name="password" id="password" placeholder="**********" required/>
        <i class="fa fa-lock"></i>
      </p>

      <p class="submit"><input type="submit" name="sent" value="Login"></p>

      <a href="<?php echo base_url() ?>index.php/User_Authentication/user_registration_show" style="padding-left: 119px;">To SignUp Click Here</a>
    </form>
  </div> <!--/ Login-->

<div class="copyright">
    <p>Copyright &copy; 2014. Created by <a href="http://febbygunawan.com" target="_blank">Febby Gunawan</a></p>
  
  
</body>
</html>
