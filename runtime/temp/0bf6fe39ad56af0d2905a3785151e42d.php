<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\xampp\htdocs\hsn2\public/../application/admin\view\Lunbo\add.html";i:1510390217;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
<title>添加新轮播</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__STATIC__/admin/style/adminStyle.css" rel="stylesheet" type="text/css" />
<style type="text/css">  
     #preview, .img, img  
     {  
     width:150px;  
     height:150px;  
     }  
     #preview  
     {  
    border:1px solid #000;  
    }  
    
</style>
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="add_user"></i><em>添加轮播</em></span>
  </div>
  <form action="add_insert" method="POST" enctype="multipart/form-data">
  <table class="list-style">
   <tr>
    <td style="width:15%;text-align:right;">轮播名字：</td>
    <td><input type="text" class="textBox length-middle" name="lunbo_name"/></td>
   </tr>

  <tr>
    <td style="text-align:right;">图片：</td>
    <td><div id="preview" ></div><input type="file" onchange="preview(this)" name="lunbo_pic"/></td>
  </tr>

   <tr>
    <td style="text-align:right;">轮播显示：</td>
    <td>
    显示：<input type="radio" name="lunbo_show" value="1">
    不显示：<input type="radio" name="lunbo_show" value="0" checked="true">
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">轮播显示位置：</td>
    <td><input type="text" class="textBox length-middle" name="lunbo_num"/></td>
   </tr>
   <tr>
    <td style="text-align:right;">轮播备注：</td>
    <td><input type="text" class="textBox length-middle" name="lunbo_remark"/></td>
   </tr>
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" class="tdBtn" value="添加新轮播"/></td>
   </tr>
  </table>
  </form>
 </div>
</body>
<script type="text/javascript">    
     function preview(file)  
     {  
     var prevDiv = document.getElementById('preview');  
     if (file.files && file.files[0])  
     {  
     var reader = new FileReader();  
     reader.onload = function(evt){  
     prevDiv.innerHTML = '<img src="' + evt.target.result + '" />';  
    }    
     reader.readAsDataURL(file.files[0]);  
    }  
     else    
     {  
     prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';  
     }  
     }  
</script> 
</html>