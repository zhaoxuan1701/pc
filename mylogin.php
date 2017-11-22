<?php
	header("content-type","text/html;charset=utf-8");
	
	//1接收数据
	$mobile = $_POST["mobile"];
	$password = $_POST["password"];
//	$mobile = "13572937727";
//	$password = "zx110119";
	//2、在数据库中查询
	   //1)、建立连接，并选择数据库
	   $con = mysql_connect("localhost","root","root");
	   mysql_select_db("userinform",$con);
	   //2)、执行SQL语句（查询）
		$sqlStr="select * from user where mobile='".$mobile."' and password='".$password."'";
	  // $sqlStr="select * from user where mobile='13572937727' and password='zx110119'";
	   
	   $result=mysql_query($sqlStr,$con);
	 
	   //3)、关闭连接
	   mysql_close($con);
	//3、响应结果
	//获得$result的行数
	$rows = mysql_num_rows($result);
		
	echo $rows;
//	
//	if($rows>0){//登录成功
//		echo "1";	
//	}else {//登录失败，返回0.
//		echo "0";
//	}	
?>