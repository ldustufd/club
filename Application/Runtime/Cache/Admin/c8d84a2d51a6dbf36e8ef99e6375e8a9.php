<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>部门</title>
<link rel="stylesheet" type="text/css" href="/club/Public/css/admin.css" />
</head>
<body >      
     <a href="<?php echo U('Activity/recycle');?>" style="color:red">回收站</a><br><br>
     <a href="<?php echo U('Activity/passedActivity');?>" style="color:red">已审核活动</a><br><br>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>待审核活动：<span class="min-left"><a href="/club/index.php/Admin/Activity/showActivity/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?> </a></span><br><br><?php endforeach; endif; else: echo "" ;endif; ?>    
    
</body>
</html>