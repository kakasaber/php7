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
