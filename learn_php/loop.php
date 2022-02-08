<?php
// while loop
$i = 0;
$x = 3;
while($i<5 ){
    echo $i+1;
    echo "<br>";
    $i++;
    $x++;
}
// for loop

for ($index=1; $index <6; $index++) { 
    echo "value of for loop is $index <br> ";
}
// do while loop
$a = 1;
do {
    echo "value of do while loop is $a <br>";
    $a++;
} while ($a <= 10);
$arr = array("jatin" ,"mohit","tanisq" ,"aman");
// echo var_dump($arr);
for ($i=0; $i <count($arr) ; $i++) { 
    echo $arr[$i];
    echo "<br>";
}
// foreach loop
foreach ($arr as $value) {
    echo "$value <br>";
}

?>