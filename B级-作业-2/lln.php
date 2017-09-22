<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<style type="text/css">
	*
	{
		font-family: "Microsoft YaHei";
		color:	#080000;
		font-style:solid;
	}
	input
	{
		margin-left: 90%;
		border:5px solid black;
		height:17%;
		width: 8%;
		color:#0000FF;
	}
	h1
	{
		display:inline;
		font-size: 18px;
	}
</style>
<body background="news1.jpg">
<h1>
<?php
	$inn = "中共十九大";
	$inn=iconv('UTF-8','GBK',$inn);
	$welcomefile=file("newsss/".$inn.".txt"); //返回数组的内容
	foreach($welcomefile as $v){
        echo $v.'<br>';
	}
?>
</h1>
<form action="llm.php"">
<input type="submit" value="下一篇">
</form>
</body>
</html>