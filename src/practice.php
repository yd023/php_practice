<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<h1>My first PHP page</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>



<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<?php
$myfile = fopen("testfile.txt", "w");

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"))."<br>";
fclose($myfile);
?>

<?php
echo readfile("webdictionary.txt");
?>

<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>
<?php include 'vars.php';
echo "I have a $color $car.";
?>

<div class="menu">
<?php include 'menu.php';?>
</div>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>

<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>

<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<?php
date_default_timezone_set("Japan/Tokyo");
echo "The time is " . date("h:i:sa");
?>

<?php
echo "Hello World!";
?>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
$x = 5 /* + 15 */ + 5;
echo $x;
$x = 5;
$y = "John";
$txt = "W3Schools.com";
echo "I love $txt!";
echo "I love " . $txt . "!";
$x = 5;
$y = 4;
echo $x + $y;
var_dump($x);
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
$x = $y = $z = "Fruit";
$y = "veggy";
echo $x . $y . $z;

$x = 5;
$y = 10;

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  myTest();
  myTest();

echo "<p>Variable x outside function is: $x</p>";

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);

  $x = "Hello world!";
$x = null;
var_dump($x);

$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

$x = 5;
$x = (string) $x;
var_dump($x);

echo strlen("Hello world!");
echo str_word_count("Hello world!");
echo strpos("Hello world!", "world");

$x = "Hello World!";
echo strtoupper($x);
$x = "Hello World!";
echo strtolower($x);
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
$x = "Hello World!";
echo strrev($x);
$x = " Hello World! ";
echo trim($x);
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

$x = "Hello World!";
echo substr($x, 6, 5);

$x = "Hello World!";
echo substr($x, 6);

$x = "Hello World!";
echo substr($x, -5, 3);

$x = "Hi, how are you?";
echo substr($x, 5, -3);

$x = "We are the so-called \"Vikings\" from the north.";

$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

echo "<br>float max and dig";
echo "$PHP_FLOAT_MAX";
echo "$PHP_FLOAT_DIG";

$x = 1.9e411;
var_dump($x);

$x = acos(8);
var_dump($x);

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
echo $x;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;

echo "<br>";

var_dump($a);
var_dump($b);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;

echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo(pi());

echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));
echo(abs(-6.7));
echo(sqrt(64));
echo(round(0.60));
echo(round(0.49));
echo(rand());
echo "<br>";
echo(rand(10, 100));

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

const MYCAR = "Volvo";
echo MYCAR;

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

function myTest2() {
  echo GREETING;
}

myTest2();

echo __DIR__."<br>";
echo __FILE__."<br>";
echo __FUNCTION__."<br>";
echo __LINE__."<br>";
echo __METHOD__."<br>";
echo __NAMESPACE__."<br>";
echo __TRAIT__."<br>";
echo __METHOD__."<br>";

$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y

// variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";

   $t = 14;

if ($t < 20) {
  echo "Have a good day!";
}

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $c < $a ) {
  echo "Both conditions are true";
}

$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}

$t = date("H");
echo "<br>$t<br>";

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$a = 5;

if ($a < 10) $b = "Hello";

echo $b;

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}

$d = 4;

switch ($d) {
  default:
    echo "Looking forward to the Weekend";
    break;
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
}

$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}

$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;

$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i. "<br>";
}

$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}

for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

function myMessage() {
  echo "Hello world!";
}

myMessage();

function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

function familyName2($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");

function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

function sumMyNumbers(...$x) {
  $n = 0;
  echo var_dump($x);
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;

function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);

echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

array_push($cars, "Ford");
var_dump($cars);

$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];

$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];

echo $cars["model"];
echo $cars['model'];

function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction);

$myArr[2]();

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);

$myArr["message"]();

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}

$x = "ice cream";

var_dump($cars);

$fruits = array("Apple", "Banana", "Cherry");
$fruits = ["Orange"];

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);

$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
echo "<br>";
var_dump($cars);

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo "<br>";
var_dump($numbers);

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
echo "<br>";
var_dump($cars);

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
echo "<br>";
var_dump($numbers);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
echo "<br>";
var_dump($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
echo "<br>";
var_dump($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
echo "<br>";
var_dump($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
echo "<br>";
var_dump($age);

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}

//var_dump($GLOBALS);

echo $_SERVER['PHP_SELF'];
echo "<br>".$_SERVER['SERVER_NAME'];
echo "<br>".$_SERVER['HTTP_HOST'];
echo "<br>".$_SERVER['HTTP_REFERER'];
echo "<br>".$_SERVER['HTTP_USER_AGENT'];
echo "<br>".$_SERVER['SCRIPT_NAME'];
echo $_SERVER["REQUEST_METHOD"];

$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);

$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);

$txt = "W3Schools.com";
$pattern = "/[co]/";
echo preg_match_all($pattern, $txt);

$txt = "Welcome";
$pattern = "/[^eo]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    echo "<br> submitted name is ".$name."<br>";
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    echo "<br>submitted gender is ".$gender."<br>";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

<a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>

<script>
function myfunction() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "demo_ajax.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.send("fname=Mary");
  }

</script>
<body>

<button onclick="myfunction()">Click me!</button>

<h1 id="demo"></h1>

<form action="welcome_get.php" method="GET">
  Name: <input type="text" name="name">
  E-mail: <input type="text" name="email">
  <input type="submit">
</form>

<form action="welcome.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website: <input type="text" name="website" value="<?php echo $website;?>">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<br><br>
Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked=true";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked=true";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked=true";?>
value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

&copy; 2010-<?php echo date("Y");?>

<?php
echo "The time is " . date("h:i:sa");
?>



</body>
</html>