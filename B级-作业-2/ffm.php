<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<style type="text/css">
	*
	{
		font-family: "STXingkai";
		color:white;
		font-style:solid;
	}
	input
	{
		margin-left: 84%;
		border:5px solid black;
		height:100px;
		width:200px;
		color:white;
		background-color: red;
	}
	.bll
	{
		font-size: 29px;
		display: inline;
		background-color:black;
	}
</style>
<body background="funny.jpg">
<div class="bll">
<?php
	$inn = "恶趣味";
	$inn=iconv('UTF-8','GBK',$inn);
	$welcomefile=file("funny/".$inn.".txt"); //返回数组的内容
	foreach($welcomefile as $v){
        echo $v.'<br>';
    }
   
?>
 </div>
<form action="ffn.php">
<input type="submit" value="下一篇">
</form>
</body>
</html>