<?php
// function in php

function processMarks($marksarr){
    $sum = 0;
    foreach ($marksarr as $value) {
        $sum += $value;
    }
    return $sum;
}
function avgMarks($marksarr){
    $sum = 0;
    $i = 1;
    foreach ($marksarr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohandas = [34,92,17,87,92,98];
$summarks = processMarks($rohandas);
echo "total marks of rohandas out of 600 is $summarks";
echo "<br>";
$rohandas = [34,92,97,87,92,98];
$summarks = avgMarks($rohandas);
echo "total marks of rohandas out of 600 is $summarks";
echo "<br>";

$rohit= [98,92,97,97,92,98];
$summarks = processMarks($rohit);
echo "total marks of rohandas out of 600 is $summarks";
echo "<br>";

$rohit= [98,92,97,97,92,98];
$summarks = avgMarks($rohit);
echo "total marks of rohandas out of 600 is $summarks";
echo "<br>";

// date

$da = date("D dS M Y g :i: s");
echo $da;



//array
// this are called index array
$arr = array("rohit","ritik","mohit");

// association in array
// this are called associate array
$fal = array('rohit' =>'red','ritik' => 'yellow','harsh' => 'green');
foreach ($fal as $key => $value) {
    echo "<br> favorite color of $key is $value";
    echo "<br>";
}
// create a 2 deminsional array
$multiDim = array(array(2,5,7,8),
                   array(1,2,3,1),
                   array(4,5,0,1));
 for ($i=0; $i < count($multiDim) ; $i++) { 
     for ($j=0; $j < count($multiDim[$i]) ; $j++) { 
         echo $multiDim[$i][$j];
         echo " ";
     }
      echo "<br>";
 }
 $ro = array(array(array(2,3,4,5),
                    array(1,2,3,4),
                    array(5,6,7,8)));
                    for ($i=0; $i < count($ro) ; $i++) { 
                        for ($j=0; $j < count($ro[$i]) ; $j++) { 
                            for ($k=0; $k < count($ro[$i][$j]) ; $k++) { 
                            echo $ro[$i][$j][$k];
                            echo " ";
                            ;
                        } echo " <br>";
                            }
                            echo " <br>";
                        }
?>