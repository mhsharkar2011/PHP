<?php 
    function double($i){
        return $i*2;
    }

    $b = $a = 5;
    $c = $a++;
    
    $e = $d = ++$b;
    echo $e;
    $f = double($d++);
    $g = double(++$e);
    $h = $g +=10;

    echo $h;
?>


<?php

$a = 6;



echo ($a == 1 ? 'one' : ($a == 2 ? 'two' : ($a == 3 ? 'three' : ($a == 4 ? 'four' : 'other') ) ) );

echo "\n";

//prints 'two'

?>

<?php 
$a = 4;
$b = 5;
$a <<= $b;
echo $a;

?>

<?php
echo "<h3>Postincrement</h3>";
$a = 0;
echo "Should be 5: " . $a++. "<br />\n";
echo "Should be 6: " . $a += $a+6 . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";
?>