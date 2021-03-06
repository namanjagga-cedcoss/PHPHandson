<?php include "footer.php";?>

<?php 
echo readfile("webdict.txt"); //Assume we have a file named "webdict.txt", write the correct syntax to open and read the file content.

echo "Hello World";  //Insert the missing part of the code below to output "Hello World".
?>


<?php

echo "This is PHP";   //Write the correct opening tag and close tag for PHP scripts.


//This is a single-line comment  //comment in php


/* This is a
multi-line
comment*/     //multi-line comment
echo "<br>";
echo "Hello World";  //Statements in PHP have to end with a special character



$txt = "Hello";  //Create a variable named txt and assign the value "Hello".

echo "<br>";
$x = 5;
$y = 7;
echo $x + $y;   //Create one variable named x, and one variable named y, then use the echo statement to output the sum of x and y.

echo "<br>";
echo strlen("Hello World!"); //Get the length of the string "Hello World!".

echo "<br>";
echo strrev("Hello World!");  //Reverse the string "Hello World!".

echo "<br>";
$oldtxt = "Hello World!";
$newtxt = str_replace("World", "Dolly", $oldtxt);  //Replace the word "World" with the word "Dolly".

echo "<br>";
echo 10 * 5;  //Multiply 10 with 5, and output the result.

echo "<br>";
echo 10 / 2;  //Divide 10 by 2, and output the result.

echo "<br>";
var_dump($a == $b);  //Use the correct comparison operator to check if $a is equal to $b.

echo "<br>";
var_dump($a <> $b); //Use the correct comparison operator to check if $a is NOT equal to $b.

echo "<br>";
$a = 50;
$b = 10;
if($a != $b) { 
    echo "Hello World";
}                       //Output "Hello World" if $a is NOT equal to $b

echo "<br>";
$a = 50;
$b = 10;
if($a == $b) {
  echo "Yes";
} else
 {
  echo "No";
}                //Output "Yes" if $a is equal to $b, otherwise output "No".

echo "<br>";
$a = 50;
$b = 10;
if ($a == $b) {
  echo "1";
} elseif
 ($a > $b) {
  echo "2";
} else
 {
  echo "3";
}                  //Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "3".

echo "<br>";
switch ($color) {
  
case "red":
    echo "Hello";
    break;
  
case "green":
    echo "Welcome";
    break;
}                   //Create a switch statement that will output "Hello" if $color is "red", and "welcome" if $color is "green".

echo "<br>";
switch ($color) {
    case "red":
      echo "Hello";
      break;
    case "green":
      echo "Welcome";
      break;
    default:
      echo "Neither";
  }                   //Add a section that will output "Neither" if $color is neither "red" nor "green"

  $i = 1; 

echo "<br>" ;
while ($i < 6) 
{
  echo $i;
  $i++;
}                //Output $i as long as $i is less than 6.

$i = 1; 

echo "<br>" ;
do {
    echo $i;
    $i++;
} while ($i < 6);   //Output $i as long as $i is less than 6.


for ($i = 0; $i < 10; $i++) {
  echo $i;
}                             //Create a loop that runs from 0 to 9.

echo "<br>" ;
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo $x.'<br>';
}                               //Loop through the items in the $colors array

echo "<br>" ;
function myFunction() {
  echo "Hello World!";
}                          //Create a function named myFunction.

myFunction();   //Call (execute) a function named myFunction.

echo "<br>" ;
function myFunction1($fname, $lname) {
    echo  $fname;
  }                                //Inside a function with two parameters, print the first parameter.


function myFunction2($fname, $lname) {
    return $lname;
}                                  //Let the function return the second value.

echo "<br>" ;
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);                         //Use the correct function to output the number of items in an array.

echo "<br>" ;
echo $fruits[1];     //Output the second item in the $fruits array.


echo "<br>" ;
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");  //Create an associative array containing the age of Peter, Ben and Joe.

echo "Ben is " .$age["Ben"]. " years old.";  //Here you see an associative array. Output "age" of Ben.

echo "<br>" ;

foreach($age as $x => $y) {
    echo "Key=" . $x . ", Value=" . $y;
}                                         //Loop through an associative array and output the key and the value.

$colors = array("red", "green", "blue", "yellow"); 
sort($colors);                           //Use the correct array method to sort the $colors array alphabetically.

echo "<br>" ;
rsort($colors);

echo "<br>" ;
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);                               //Use the correct array method to sort the $age array according to the values

?>
<form action="welcome.php" method="post">
First name: <input type="text" name="fname">
</form>                         
<?php // If the form in the white section below gets submitted, how can you, in welcome.php, output the value from the "first name" field?

echo "<br>" ;
echo date("l");  //Use the correct date function to output the weekday of today (monday, tuesday etc.).

echo "<br>" ;
echo date("Y.m.d");   //Use the correct format parameter to output a date like this: 2022.02.19.

echo "<br>" ;
echo date("H:i:s");   //Use the correct format parameter to output the time like this: 11:45:06


setcookie("username", "John", time() + (86400 * 30), "/");  //Create a cookie named "username".

session_start();
$_SESSION["favcolor"] = "green";  //Create a session variable named "favcolor".

echo $_SESSION["favcolor"];  //Output the value of the session variable favcolor

// $myfile = fopen("webdict.txt", "r");

// while(!feof($myfile)) {
//   echo fgetc($myfile);
// }                         //Open a file, and write the correct syntax to output one character at the time, until end-of-file.

?>

