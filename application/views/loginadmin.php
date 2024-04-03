
<html lang="ja">
<head>
    <title>Đăng nhập admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
      <!-- Latest compiled and minified CSS -->
      <link href="<?php echo base_url('css/bootstrap.css');?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('css/font-awesome.css');?>" rel="stylesheet">
      <!-- Optional theme -->
      <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url('js/jquery-1.11.1.min.js');?>"></script>
      <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class = "container border-color" >
<div class="login">
	<h2>Login</h2>
	<?php
   echo '<center><div class="error" >'.validation_errors().(empty($error_mess)?'':$error_mess).'</div></center>';
   echo form_open('account/login');
   ?>
		<input type="text" name="user[taikhoan]" class="user active" placeholder="Tài khoản"/>
		<input type="password" name="user[password]" class="lock active" placeholder="Mật khẩu" />
	<div class="login-bwn">
	   <input type="submit" value="Đăng nhập" />
	</div>
	<?php 
   echo form_close();
   ?>
</div>
</div>
</body>
</html>
