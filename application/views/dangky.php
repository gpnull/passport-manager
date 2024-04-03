
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
     <?php 
   $mess = $this->session->flashdata('message');
   if($mess){
    echo "<script>alert('".$mess."')</script>";
   }
   ?>
<div class = "container border-color" style="background: url(<?php echo base_url('images/bg.png');?>) no-repeat fixed center;">
  <center><h1 style="margin-top:30px;">Form Đăng Ký Cấp Passport</h1></center>
<div class="login">
	<?php
   echo '<center><div class="error" >'.validation_errors().(empty($error_mess)?'':$error_mess).'</div></center>';
   echo form_open(base_url('account/dangky'));
   ?>
		<input type="text" name="pasport[hoten]" class="user active" placeholder="Họ Tên" required=""/>
		<input type="text" name="pasport[diachithuongtru]" class="lock active" placeholder="Địa Chỉ Thường Trú" required=""/>
    <input type="text" name="pasport[cmnd]" class="lock active" placeholder="Số CMND" required=""/>
    <input type="text" name="pasport[sodienthoai]" class="lock active" placeholder="Số Điện Thoại" required=""/>
    <input type="email" name="pasport[email]" class="lock active" placeholder="Email" required="" />
    <center>Giới Tính<label class="radio-inline">
      <input type="radio" value="Name" name="pasport[gioitinh]">Nam
    </label>
    <label class="radio-inline">
      <input type="radio" value="Nữ" name="pasport[gioitinh]" checked="">Nữ
    </label>
   </center>
	<div class="login-bwn">
	   <input type="submit" value="Đăng Ký" />
	</div>
	<?php 
   echo form_close();
   ?>
</div>
</div>
</body>
</html>
