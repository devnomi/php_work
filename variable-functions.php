<pre>
<?php
/*
    empty
    isset
    is_array
    is_int
    is_float
    is_object
    */

$z = 34.3;
$x = 345;
$aa = 0;

//empty will return true if value 0 false null empty_string empty_array is passed to it else it will return false
echo "<h3>Empty</h3>";
var_dump( empty($x) );
var_dump( empty($aa) );
echo "<hr>";

echo "<h3>isset</h3>";
//y is not set
var_dump(isset($y));
var_dump(isset($z));
echo "<hr>";

echo "<h3>is_array</h3>";
$arr = [1,2,3];
var_dump(is_array($arr));
var_dump(is_array($x));

echo "<hr>";
echo "<h3>is_int</h3>";
var_dump(is_int($x));
var_dump(is_int($z));

echo "<hr>";
echo "<h3>is_float</h3>";
var_dump(is_float($x));
var_dump(is_float($z));

echo "<hr>";
echo "<h3>is_string</h3>";

var_dump(is_string("hello world"));
var_dump(is_string(34));
//$√  = 34;
//echo $√;

echo "<hr>";
echo "<h3>is_object</h3>";
//mysqli_connect will return an object
$conx = mysqli_connect("localhost", "root", "");
var_dump(is_object($conx));
var_dump(is_object($x));

echo "<hr>";
echo "<h3>intval</h3>";
var_dump( intval(23.934) );
var_dump( intval(25) );
var_dump( intval("43") );
var_dump( intval("34sdf") );
var_dump( intval("34sdf423") );
var_dump( intval([2,3]) );

echo "<hr>";
echo "<h3>floatval</h3>";
var_dump( floatval(324) );
var_dump( floatval(43.43) );
var_dump( floatval("23.43") );
var_dump( floatval([2,3]) );

?>
</pre>