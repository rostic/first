<?php
	$num=$_POST['num'];
	$name=$_POST['name'];
	$squares=$_POST['s'];
	//connect db
	$connect = mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("database");
	mysql_query("SET NAMES 'cp1251';");

	$s="CREATE TABLE IF NOT EXISTS flat (num int, name char(30), squares int, sellerId int);";
	mysql_query($s);
	$s="INSERT INTO flat VALUES
	(".$num.",'".$name."','".$squares."','2');";
	mysql_query($s);

	// $s="SELECT * FROM flat;";
	// $r=mysql_query($s);

	// 	while ($q=mysql_fetch_row($r))
	//  echo "Номер ", $q[0],"; Имя покупателя ",$q[1],"; Площа ",$q[2],"; Id продавца ",$q[3],"<br>";

	
	 mysql_close($connect);
	// echo "Запись добавлена.
	// <a href=\"index.php\">Сделать еще одну запись</a>";

?>
