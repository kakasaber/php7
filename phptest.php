<?php


	
# 组合比较符 (<=>)
echo "<br/>";
vaR_dump("PHP"<=>"Node"); 
echo "<br/>";
var_dump(123<=>456);
echo "<br/>";
var_dump(['a','b']<=>['a','b']);

?>


<?php
###2. null合并运算符
$a = isset($_GET['a'])? $_GET['a']:'none';
$a = isset($_GET['a'])??'none';

?>


<?php
# 变量类型声明
echo "<br/>";
function sumOfInts(int ...$ints){
	return array_sum($ints);
}

print_r(sumOfInts(2,'3',4.1));

//declare(strict_types=1);

function add(int $x,  int $y)
{
	return $x+$y;
}

var_dump(add('2',3));

?>


<?php 
   //6. 匿名类
   // php7允许new class {} 创建一个匿名的对象。
class Logger
{
     public function log($msg)
     {
     	echo $msg;
     }

}

//$util->setLogger(new Logger());

//php+
new class{

	public function log($msg)
	{
		echo $msg;
	}
}

?>



<?php
echo "\u{aa}";// ª
echo "\u{0000aa}";// ª
echo "\u{9999}";// 香
?>


<?php
	echo "<br/>";
	class A{private  $x= 1;}

	$getXCB =function (){return $this->x;}

	$getX = $getXCB->bindTo(new A,'A');

	echo $getx();
?>
