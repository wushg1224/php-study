// Php 学习教程 p14-18

<?php
echo "<h1>hello world</h1>";
echo "i want to learn php !<br>";
print "hello world<br>";
echo "php is very interesting<br>";
$x = <<<eof

this is a test
i am blablabla
who are you
eof;
echo $x;
echo "<br>";

// string

$x = "hello world";
echo $x;
echo "<br>";
$x = 'hello world !';
echo $x;
// array
$car = array("volvo", "bmw", "toyota");
var_dump($car);
echo "<br>";

// null

$x = "hello world";
$x = null;
var_dump($x);
echo "<br>";

// 常量
define("GREETING", "welcome to w3school.com.cn");
echo GREETING;
echo "<br>";

define("GREET", "welcome to w3school.com.cn");
function myTest()
{
    echo GREET;
}
myTest();
echo "<br>";

//求字符串长度
echo strlen("hello world");
echo "<br>";

// 搜索字符串
echo strpos("hello world", "world");
echo "<br>";
//运算符
//%取余
//x++ 先赋值后运算 x=x+1
//x-- 先赋值后运算 x=x-1
//x == y x等于y
//x === y x等于y且类型相同

//条件语句

$t = date("H");
echo $t;
echo "<br>";
$t = date("H");
if ($t < "20") {
    echo "have a good day";
}
echo "<br>";
//switch
// switch (n){
//     case label1:
//         break;
//     case label2:
//         break;
//     default:
//         break;
// }

$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "your favorite color is red";
        break;
    case "blue":
        echo "your favorite color is blue";
        break;
    case "green":
        echo "your favorite color is green";
        break;
    default:
        echo "your favorite color is neither red, blue, nor green";
}
echo "<br>";


//数值数组
$cars = array("volvo", "bmw", "toyota");
$cars[0] = "volvo";
$cars[1] = "bmw";
$cars[2] = "toyota";
echo $cars[0];
echo "<br>";
echo "i like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";


//遍历数组
$cars = array("volvo", "bmw", "toyota");
$arrlength = count($cars);
for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";

//关联数组
$age = array("peter" => "35", "ben" => "37", "joe" => "43");
foreach ($age as $x => $x_value) {
    echo "key=" . $x . ",value=" . $x_value;
    echo "<br>";
}
echo "<br>";


//数组排序
$numbers = array(8, 6, 2, 22, 11);
rsort($numbers);
echo $numbers[0];
echo "<br>";


//php学习教程 p19-20



//循环
//while
$p = 1;
while ($p <= 5) {
    echo "the number is:$p <br>";
    $p++;
}
echo "<br>";

//do while
$i = 1;
do {
    $i++;
    echo "the number is:$i <br>";
} while ($i <= 5);
echo "<br>";

//for
for ($i = 0; $i <= 10; $i++) {
    echo "the number is:$i <br>";
}
echo "<br>";

//foreach
$x = array(1 => "Google", 2 => "Runoob", 3 => "Taobao");
foreach ($x as $k => $v) {
    echo "key=" . $k . ",value=" . $v;
    echo "<br>";
}

echo "<br>";

//函数
function writeName()
{
    echo "yang mi.<br>";
}
echo "my name is ";
writeName();
echo "<br>";

//函数参数
function writefName($fname)
{
    echo $fname . " Gao.<br>";
}
echo "my name is ";
writefName("kai");
echo "my sister's name is ";
writefName("mi");
echo "my brother's name is ";
writefName("hao");
echo "<br>";

//返回值
function add($x, $y)
{
    $total = $x + $y;
    return $total;
}
echo "1+16=" . add(1, 16);
echo "<br>";

//$_GET get变量，对任何人可见
//$_POST post变量，对任何人不可见

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>get method</title>
</head>

<body>
    <form method="get" action="test.php">
        姓名：
        <input type="text" name="name">
        爱好：
        <select name="hobby">
            <option value="1">唱</option>
            <option value="2">跳</option>
            <option value="3">篮球</option>
        </select>
        <input type="submit" value="提交">
    </form>

    <form method="post" action="test.php">
        username：
        <input type="text" name="username">
        password：
        <input type="password" name="password">
        <input type="submit" value="login">

    </form>
</body>

</html>