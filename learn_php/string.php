<?php
$name = "harry is a good boy";
echo $name;
echo "<br>";
echo strlen($name);echo "<br>";
echo "this is ". "boy ".$name;echo "<br>";
echo str_word_count($name);echo "<br>";
echo strrev($name);echo "<br>";
echo strpos($name,"is");echo "<br>";
echo str_replace("harry","ritik",$name);echo "<br>";
echo str_repeat($name,14);
echo "<br>";
echo "<pre>";
echo rtrim("    this is boolen for fly in air   ");
echo ltrim("    this is boolen for fly in air   ");
echo "</pre>";
?>
<!-- operators in php -->
<?php
$a = 36;
$b = 16;
$c = 10;
$d = 12;
echo "a sum b is equal to " . ($a + $b) . "<br>";
echo "a subtract b is equal to " . ($a - $b) . "<br>";
echo "a multiple b is equal to " . ($a * $b) . "<br>";
echo "a divide b is equal to " . ($a / $b) . "<br>";
// assignent operators
$a += 6;
$b -= 6;
$c *= 2;
$d /= 6;
echo "for a,the value is ". $a."<br>";
echo "for b,the value is ". $b."<br>";
echo "for c,the value is ". $c."<br>";
echo "for d,the value is ". $d."<br>";
// comparison
$x = 3;
$y = 2;
echo "for x == y, the result is "; echo var_dump($x<$y);
echo "<br>";
// logical operator
$r = true;
$r1 = false;
echo "for r and r1 is equal to ";
echo var_dump($r && $r1);
echo "<br>";
echo "for r or r1 is equal to ";
echo var_dump($r || $r1);
echo "<br>";
echo "for r not r1 is equal to ";
echo var_dump(!$r1);
echo "<br>";



?>