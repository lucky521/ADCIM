<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<title>信息追溯系统</title>
<style>
	body
	{
		text-align:center;
	        background-color:#ccc;
	}
	.biaoti
	{
		text-align:center;
	}
	.mainbody
	{
		margin:auto;
		width:780px;
		text-align:center;
	}
	.left
	{
		float:left;
		width:300px;
	}
	.right
	{
		float:left;
		margin-left:30px;
		width:400px;
		text-align:left;
	}
	.block
	{
		margin-top:83px;
		margin-bottom:30px;
		font-size:24px;
	}
	a
	{
		text-decoration:none;
	}
	a:hover
	{
		background:#339933;
	}
	:invalid { 
	  border-color: #e88;
	  -webkit-box-shadow: 0 0 5px rgba(255, 0, 0, .8);
	  -moz-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
	  -o-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
	  -ms-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
	  box-shadow:0 0 5px rgba(255, 0, 0, .8);
	}
	
	:required {
	  border-color: #88a;
	  -webkit-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
	  -moz-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
	  -o-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
	  -ms-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
	  box-shadow: 0 0 5px rgba(0, 0, 255, .5);
	}
	input {
		  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		  border:1px solid #ccc;
		  font-size:20px;
		  width:300px;
		  min-height:30px;
		  display:block;
		  margin-bottom:15px;
		  margin-top:5px;
		  outline: none;
		
		  -webkit-border-radius:5px;
		  -moz-border-radius:5px;
		  -o-border-radius:5px;
		  -ms-border-radius:5px;
		  border-radius:5px;
		}
</style>
</head>

<body>
<div class="biaoti">
	<h1>信息追溯系统控制面板</h1>
</div>
<div class="mainbody" align="center">
	<div class="left">
		<div class="block">
		<a href="../../../../jsondemo/index.php/Index/query_page">查看数据</a>
		</div>
		<div class="block">
		<a href="../../../../jsondemo/index.php/Index/insert_page">插入数据</a>
		</div>
		<div class="block">
		<a href="../../../../jsondemo/index.php/Index/delete_page">删除数据</a>
		</div>	
	</div>
	<div class="right">
		<form action="../../../../jsondemo/index.php/Index/delete_data">
		  <h2>请输入所要删除的ID</h2>
		  <br>
		  <br>
		  <br>
		  <br>
		  <label >ID:</label>
		  <input type="text" id="id" name="id"  required>
		  <input type="submit" value="删除"/> 
		</form>
	</div>
</div>
</body>
</html>