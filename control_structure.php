<?php
$food1 = "Cake";
$food2 = "Apple";

$return_value = match($food1){
    'Apple' => 'This is Apple',
    'bar'=> 'This is Bar',
    'Cake' => 'This is cake'
};
echo $return_value;

?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$a = 10;
$b = 99;
$c = 88;

if($a>$b & $a >$c){
    echo "$a is bigger than $b and $c";
}elseif($b>$c & $b>$a){
    echo "$b is bigger than $c";
}else{
    echo "$c is bigger";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";



if($a < $b){
    echo "$a is bigger than $b";}
elseif ($a == $b){
    echo $a ." is equal to". $b;}
else{
    echo $a . "Not equal" . $b;
    
    if($b>$c){
        echo $c;
    }

}



echo "<br/>";
echo "<br/>";
echo "<br/>";

?>
<?php if ($a == 10): ?>
    A is equal to <?php echo $a; ?>
<?php endif; ?>


<?php
function printUsers()
{
    $users = [
        [
            'id' => 1,
            'full_name' => 'John Doe',
            'email' => 'john@example.com'
        ],
        [
            'id' => 2,
            'full_name' => 'Jane Smith',
            'email' => 'jane@example.com'
        ],
        [
            'id' => 3,
            'full_name' => 'Michael Johnson',
            'email' => 'michael@example.com'
        ]
    ];

    foreach ($users as $user) {
        $template = <<<HTML
        <tr id="userRowTemplate">
            <th id="txtUserId" scope="row">{$user['id']}</th>
            <td id="txtUserFullName">{$user['full_name']}</td>
            <td id="txtUserEmail">{$user['email']}</td>
            <td id="action">
                <button id="btnEnable">Enable</button>
                <button id="btnDisable">Disable</button>
            </td>
        </tr>
        HTML;

        echo $template;
    }
}

echo "<br>";
echo "<br>";
echo printUsers();

?>



<?php 
echo "<br>";
echo "<br>";

$x = 0;

while($x<=10){
    echo "The Number is $x <br>";
    $x +=10;
}

?>


<?php
// generating an array with random even numbers between 1 and 1000

$numbers = array("M","B","H");
$array_size = 6;

// for loop runs as long as 2nd condition evaluates to true
for ($i=0;$i<$array_size;$i++) { 

      // always executes (as long as the for-loop runs)
      do { 
         $random = rand(1,1000);

     // if the random number is even (condition below is false), the do-while-loop execution ends
     // if it's uneven (condition below is true), the loop continues by generating a new random number
     } while (($random % 2) == 1);

     // even random number is written to array and for-loop continues iteration until original condition is met
     $numbers[] = $random; 
}

// sorting array by alphabet

arsort($numbers);

// printing array

echo '<pre>';
print_r($numbers);
echo '</pre>';


for ($i=0; $i < 10; $i++ ) {
    
    echo $i-2 . "<br>";
}

echo "<br>";
echo "<br>";


for ($i = 1, $j = 0; $i <= 9; $j += $i, print $j . "<br>", $i++);


?>

<?php

echo "<br>";

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0, $size = count($people); $i < $size; ++$i) {
   echo "<br>". $people[$i]['salt'] = mt_rand(000000, 999999);
}




for($col = 'R'; $col != 'AB'; $col++) {
    echo $col.' ';
}


// for ($date = strtotime("2023-01-01"); $date < strtotime("2023-02-01"); $date = strtotime("+1 day", $date)) {
//     echo date("Y-m-d", $date)."<br />";
// }

echo "<br>";echo "<br>";

$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
    if($value == 1)
    continue;
    echo "Break " . $value = $value + 2;
}
// $arr is now array(2, 4, 6, 8)
echo "<br>";echo "<br>";


foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}


$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A: $a; B: $b\n";
    
}

$i = 0;
while ($i++ < 5) {
    echo "Outer\n";
    while (1) {
        echo "Middle\n";
        while (1) {
            echo "Inner <br>";
            continue 3;
        }
        echo "This never gets output.\n";
    }
    echo "Neither does this.\n";
}


?>


<?php

if($a = true):
    echo "True";
    echo "This is True";
else:
    echo "False";
endif;

?>


