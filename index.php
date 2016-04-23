<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>

</body>
</html>
<?php
header("");
echo "thank you ，dongsheng master！";
echo "<br>";
define("hjl", "我是黄杰隆",true);
echo hjl;
echo "<br>";
function myTest(){
	echo hjl;
}
myTest();
echo "<br>";
$text1="hello world!";
echo $text1;
$text2="what a nice day!";
echo $text1 . "" . $text2;
echo strlen("Hello world!");
echo "<br>";
echo strpos("Hellow world!", "world");
echo "<br>";
echo strpos("Hellow world", "world");
echo "<br>";
echo strpos("nihao", "o");
echo "...";echo "<br>";



//a.=b   a=a.b    链接两个字符串
//x===y 恒等于 5==="5"   返回false
//x!==y 5!=="5"   返回true
//x<>y 不等于
/* x and y 与
x or y 货
// x xor y 异或*/
// (expr1)?(expr2):(expr3);
// echo PHP_EOL;//换行符
// echo 1.5<=>1;//0
if (1) {
 	echo "gg";
 	echo "<br>";

 } 
echo "fuck";echo "<br>";

$cars=array("Volvo" , "BMW" , "Toyota");
echo "I like" ." ". $cars[0] . "," .$cars[1] . "and" . $cars[2] .".";echo "<br>";

echo count($cars);//3
$age=array("petter"=>"35","Ben"=>"37","Joe"=>"43");
echo "<br>";
echo "petter is" ." ". $age['petter'] . " years old.";
echo "<br>";
$arrlrngth=count($cars);
for($x=0;$x<$arrlrngth;$x++)
{
	echo "$cars[$x]";
	echo "<br>";
}
$age=array("petter"=>"35","Ben"=>"37","Joe"=>"43");
foreach ($age as $x => $x_value) {
	echo "key=". $x .", Value=" . $x_value;
	echo "<br>";
}

$x=75;
$y=25;
function addition(){
	$GLOBALS['Z']=$GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo $Z;
echo $_SERVER['PHP_SELF'];
echo "<br>";

echo $_SERVER['SERVER_NAME'];echo "<br>";

$str_html="<b>文字加粗显示</b>";
echo $str_html;
echo "<br>";
$abbbbb="<b>wewewe</b>";
echo $abbbbb;
?>



<!DOCTYPE html>

<form method="get" action="">
Name:<input type ="text" name="fname">
<input type ="submit">
</form>
<?php
$name=&$_GET['fname'];
echo $name;
?>

</body>
</html>

<?php
$gg="aaa";
echo "<br>";
echo $gg;
echo "<br>";


$str_javascript='
	<script type=\'text/javascript\'>
		alert("动态网页之美—php");
	</script>';
echo $str_javascript;

$a="name";
$$a="Hellow PHP";
echo $$a;

$color="";
echo "变色列表";
echo "<ul>";
for ($i=1; $i<= 5 ; $i++) {
	if ($i%2==0) {
		$color="red";
	}else 
	{$color="yellow";
}
	echo "<li style='background:".$color.";width:200'>第".$i."行内容</li>";
}
echo "</ul>";

function wrintename($fname)
{
	echo $fname ."Refsnes.<br>";
}
echo "My name is ";
wrintename("Kai Jim");

?>

<html>
<body>
<form action="welcome.php" method="post">
Name:<input type ="text" name="fname">
Age: <input type="text" name="age">
sex: <input type="text" name="sex">
<input type="submit">
</form>

<form action="welcome2.php" method="get">
Name:<input type ="text" name="fname">
Age: <input type="text" name="age">
sex: <input type="text" name="sex">
<input type="submit">
</form>

</body>
</html>
<?php
echo '这是第“ ' . __LINE__ . ' ” 行';
echo '该文件位于“'.__FILE__.'” ';     
echo '该文件位于“'.__DIR__.'” ';   
echo "增加";echo "增加";
//lalalallalalaalalalalawhy


?>



<!DOCTYPE html>
<html>
<head>
	<title>0.0</title>
</head>
<body>
<form action="index.php" method="post">
	Name: <input type="text" name="name">

	E-mail:<input type="text" name="email">

	Website:<input type="text" name="website">

	Comment:<textarea name="commrnt" rows="5" cols="40"></textarea>
	
    <input type="submit" name="提交">

	Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <form method="pist" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

</form>
</body>
</html>


<?php 
echo "Hellow";
?>


