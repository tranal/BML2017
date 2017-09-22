<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<style type="text/css">
	*
	{
		font-family : "SimSun";
		color:#080000;
		font-size: 22px;
	}
	h1
	{
		font-size: 18px;
		font-family : "SimSun";
		color:#380000;
	}
	input
	{
		height: 15%;
	}
	.in
	{
		border:3px solid red;
		width: 29%;
	}
	.search
	{
		border:5px solid black;
		width: 10%;
	}
</style>
<body background="search.jpg">
<form action="search.php" method="post">
 	<input type="text" name="inn" class="in" value="请输入关键词">
 	<input type="submit" name="search" class="search" value="查找" >
 </form>
<h1>
<?php
		if(array_key_exists('inn',$_POST))
		{
			$inn=$_POST['inn'];
			$inn=iconv('UTF-8','GBK',$inn);
			if(is_readable("newsss/".$inn.".txt"))
			{
				$welcomefile=file("newsss/".$inn.".txt"); //返回数组的内容
				foreach($welcomefile as $v){
        			echo $v.'<br>';
				}
			}
			else if(is_readable("funny/".$inn.".txt"))
			{
				$welcomefile=file("funny/".$inn.".txt"); //返回数组的内容
				foreach($welcomefile as $v){
        			echo $v.'<br>';
				}
			}
			else if(is_readable("cartoon/".$inn.".txt"))
			{
				/*$myfile = fopen("cartoon/".$inn.".txt", "r");
				$size=filesize("cartoon/".$inn.".txt");
				$box=fread($myfile,$size);
				echo $box;
				fclose($myfile);*/
				$welcomefile=file("cartoon/".$inn.".txt"); //返回数组的内容
				foreach($welcomefile as $v){
        			echo $v.'<br>';
				}
			}
			else if(is_readable("en/".$inn.".txt"))
			{
				$welcomefile=file("en/".$inn.".txt"); //返回数组的内容
				foreach($welcomefile as $v){
        			echo $v.'<br>';
				}
			}
			else
				echo '很抱歉，暂时没有您所需要的信息，请换个别的试试吧！！';
				
		}
		else
			echo '您尚未输入任何关键词';
	?>
</h1>
</body>
</html>
