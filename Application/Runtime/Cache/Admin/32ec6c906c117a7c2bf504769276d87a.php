<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>社团管理登录</title>
  <link rel="stylesheet" type="text/css" href="/club/Public/css/my.css">
 </head>
 <body>
  <div class="login">
 	<div class="main">
 		<div class="logo">
 			<p>社团管理员端</p>
 		</div>
 		<div class="sign">
 			<input type="text" class="username" name="username" placeholder="请填写用户名">
 			<input type="password" class="password" name="password" placeholder="请填写密码">
 			<input type="text" class="check" name="verify" placeholder="请填写验证码">
 			<a href="javascript:void(0)" class="reloadverify" onclick="changeVerify()">换一张?</a>
 			<img src="http://127.0.0.1/club/index.php/Club/Register/verify" class="verify" onclick="changeVerify()">
 			<div  class="submit">登录</div>
 	    </div>
 </div>
 <script type="text/javascript" src="/club/Public/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/club/Public/js/js.js"></script>
 </body>
</html>