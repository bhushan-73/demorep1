<?php

include 'connection.php';

$sql = "select * from cms;";
$result = $conn->query($sql);
$rows = mysqli_fetch_assoc($result);
while ($rows = mysqli_fetch_assoc($result)) {
echo '<pre>';
print_r($rows);
echo '</pre>';
}

$string = 'b h a v e s h';
$i = 0;
while ($string[$i] != '') {
    $i++;
}
print_r(explode(" ", $string));
$q = explode(" ", $string);
echo '<br>';
$y = implode(' ', $q);
print_r(implode(' ', $q));
echo '<br>';
echo count($q);
$cnt = count($q);
echo '<br>';
$U = array_reverse($y);
echo $U;

for ($j = $i - 1; $j >= 0; $j--) {
    echo $y[$j];
}
echo '<br>';
print_r($i);
echo '<br>';

// Reverse String 

$string = 'Hello world';
$reverse = '';
$i = 0;
while (!empty($string[$i])) {
    $reverse = $string[$i] . $reverse;
    $i++;
}
echo $reverse;

// find Length of string

echo '<br>';

$j = 0;
while (isset($string[$j])) {
    $j++;
}
echo $j;

echo '<br>';

/* PHP program to reverse a number without using function */

$num = 2039;
$revnum = 0;
while ($num != 0) {
    $revnum = $revnum * 10 + $num % 10;
    //below cast is essential to round remainder towards zero
    $num = (int) ($num / 10);
}

echo "Reverse number:= $revnum\n";
echo '<br>';

function reverse_number($number) {

    /* Typecast the number into string. */

    $snum = (string) $number;

    /* Reverse the string. */

    $revstr = strrev($snum);

    /* Typecast string into int. */

    $reverse = (int) $revstr;

    return $reverse;
}

echo reverse_number(2039);

// array sorting.

$array=array('2','4','8','5','1','7','6','9','10','3');

echo "Unsorted array is: ";
echo "<br />";
print_r($array);


for($j = 0; $j < count($array); $j++) {
    for($i = 0; $i < count($array)-1; $i++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

echo "Sorted Array is: ";
echo "<br />";
print_r($array);

echo "<br/>";
// delete pericular element from array

$a=array("red","green","blue");
array_pop($a);
print_r($a);

echo "<br/>";
$array = array('apple', 'orange', 'strawberry', 'blueberry', 'kiwi');
echo 'main array';
echo "<br/>";
echo '<pre>';
print_r($array);
echo "<br/>";
echo 'after deleted element from array';

if (($key = array_search('strawberry', $array)) !== false) {
    unset($array[$key]);
}
echo '<pre>';
print_r($array);
echo "fbdhbdbvhd<br/>";
//foreach (array_keys($array, 'strawberry') as $key) {
//    unset($array[$key]);
$key = array_keys($array, 'orange');
    print_r($key);
//}
echo "<br/>";
$array = array('apple', 'orange', 'strawberry', 'blueberry', 'kiwi', 'strawberry'); //throw in another 'strawberry' to demonstrate that it removes multiple instances of the string
$array_without_strawberries = array_diff($array, array('strawberry'));
print_r($array_without_strawberries);
echo "<br/>";
echo "find duplicate value from array";
echo "<br/>";
function showDups($array)
{
  $array_temp = array();

   foreach($array as $val)
   {
     if (!in_array($val, $array_temp))
     {
       $array_temp[] = $val;
     }
     else
     {
       echo 'duplicate = ' . $val . '<br />';
     }
   }
}


$array = array(1,2,2,4,5);
showDups($array);

echo '<br>';
echo "<h2>Hello</h2>";
echo '<br>';
$ip = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : getenv('REMOTE_ADDR');
print $ip;
echo '<br>';



echo '<br>';
echo 'Factorial of number';


$num = 5;
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}

echo "Factorial of $num is $factorial";

echo '<br>';
echo '<br>';
echo 'Find first and second heighest number from array ';
echo '<br>';
$numbers = array_unique(array(1,15,2,10,4)); 
// rsort : sorts an array in reverse order (highest to lowest).

 rsort($numbers); 

 echo 'Highest is ='.$numbers[0].', Second highest is ='.$numbers[1];

 // O/P: Highest is -15, Second highest is -10
 echo '<br>';
 echo 'Withought using sort function';
 echo '<br>';
 $array = array('200', '15','69','122','50','201');
 $max_1 = $max_2 = 0;
 
 for($i=0; $i<count($array); $i++)
 {
     if($array[$i] > $max_1)
     {
       $max_2 = $max_1;
       $max_1 = $array[$i];
     }
     else if($array[$i] > $max_2)
     {
       $max_2 = $array[$i];
     }
 }
 echo "First highest=".$max_1;
 echo "<br />"; 
 echo "second highest=".$max_2;

echo '<br>';
echo '<br>';
echo 'Swapping numbers withought using 3rd variable';
$a=12;
$b=13;
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "a= $a  and b= $b"; 
echo '<br>';
// echo phpinfo();
// echo '<br>';



$a12 = '1';
$b12 = &$a12;
$b12 = "2$b12";
echo $a12.", ".$b12;
echo '<br>';
echo '<br>';

$text = 'John ';
$text[10] = 'Doe';
echo $text;
echo '<br>';
echo strlen($text);

echo "<br>";

//Q4: Write code to complete the below PHP function, the comments describe how the function should work and also describes the input and output parameters: 

/**************************************************************************************** 
* Function Name - Encode a string
* Input is a string sent as a parameter in the function call
* This function returns another string that is encoded as per the rule defined below
* RULE FOR ENCODING: replace each character of the string with the corresponding character as below: 
*         a = 1 ; b= 2 ; c = 3 ; ......... ; x = 24 ; y= 25 ; z = 26
*******************************************************************************************/ 

function encodedString($your_string){
    $alpha_arr = range("A","Z");

    $your_string = strtoupper($your_string);

    $encoded = "";

    for($i=0; $i<strlen($your_string); $i++)
    {
       $strOne = substr($your_string, $i, 1);
        if (in_array($strOne, $alpha_arr)) 
        {       
            $encoded .= array_search($strOne, $alpha_arr)+1;
        }   
    }
    return $encoded;
}
echo "<br>";
echo "BEFORE ENCODING";  
echo "<br>";
echo "bhavesh";
echo "<br>";
echo "AFTER ENCODING";
echo "<br>";
echo encodedString('bhavesh');

echo "<br/>";
$ma="a";
$ba=7;
echo "$ma.$ba";
echo "<br/>";
echo '$ba';
echo "<br/>";
echo "$ma";
echo "<br/>";

function tempe($o,$p=0)
{
      $o=5; $p=5;
   $Q = $o+($p/$p);
   return $Q;
}
echo tempe(4,4);
echo  "<br/>";
echo tempe(8,8);

echo  "<br/>";
echo "Print pattern";
/*
print a pattern like 
*
***
*****
***
*

*/
echo  "<br/>";

for($w=1; $w<6; $w++)
{
    if($w != 2 && $w != 4){
    for($g=1; $g<=$w; $g++){
          echo "*";
    }
 }
 echo "<br>";
}

echo "<br>";

for($s=1; $s<=3; $s++){
    if($s != 2){
    for($l=3; $l>=$s; $l--){
        echo "*";
    }
  }
  echo "<br>";
}
?>