<?php
/*$string = 'this is a sting';
$array = explode(' ', $string);
print_r($array);*/
/*$array = array(10, 12.16, true, "username", 'password');
$string = implode(' -- ', $array);
echo $string;
$array = array('sy', 'eg', 'lb');
echo 'the array is : <br>';
print_r($array);
$array[] = 'sa';
echo '<br>the array after adding sa is :<br>';
print_r($array)
$array = array('sy', 'eg', 'lb');
echo 'the array is : <br>';
print_r($array);
#$array[] = 'sa'; this line is repalced by :
array_push($array, 'sa');
echo '<br>the array after adding sa is :<br>';
print_r($array);
$array = array('sy', 'eg', 'lb', 'sa');
if(in_array('sa', $array) == true)
{
echo ' sa is found in $array array <br>';
}
if(in_array('fr', $array) == false)
{
    echo ' fr is NOT found in $array array <br>';
}
$array = array('sy', 'eg', 'lb', 'sy', 'lb', 'sa');
$new_array = array_unique($array);
echo 'the first array is : ';
print_r($array); # Array ( [0] => sy [1] => eg [2] => lb [3] => sy [4] => lb [5] => sa )
echo '<br> the "unique" one : ';
print_r($new_array); # Array ( [0] => sy [1] => eg [2] => lb [5] => sa )

$array = array(123, 1, 12, 'name' => 'sy', 'eg');
print_r($array);
sort($array);
echo '<br>';
print_r($array);

$array = array(123, 1, 12, 'name' => 'sy', 'eg');
print_r($array);
asort($array);
echo '<br>';
print_r($array);

function f_echo()
{
echo "<h1>PHP:hypertext processor</h1>";
}
f_echo();

$in = 'username1';
function f_echo($in)
{
    echo "<h1>$in</h1>";
}

f_echo($in);
f_echo(12.332);
f_echo('username2');
f_echo(true); 

function sum($var1, $var2)
{
return $var1 + $var2;
}
echo sum(10, 20);

function f_echo($in = "text")
{
echo "<h1>$in</h1>";
}
f_echo();

function math($x)
{
return array($x * $x, log($x));
}
print_r(math(23)); */

$id = '';
$name = '';
if(isset($_GET['id']))
$id = $_GET['id'];
if(isset($_GET['name']))
$name = $_GET['name'];
echo $id.'-'.$name;

foreach($_GET as $key => $value){
    echo $key.' = '. $value;
}



?>
