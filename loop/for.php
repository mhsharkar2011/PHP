<?php 
$fruits = ['Apple','Mango','Banana','Dragon','Orange','Graps','Painaapple'];

$lenth = count($fruits);
for($i = 0; $i<$lenth; $i++)
{
    echo "I like: $fruits[$i]";
    echo "<br/>";
}


$itemsPerPage = 3; // Number of items to display per page
$totalItems = count($fruits);
$totalPages = ceil($totalItems / $itemsPerPage); // Calculate total pages
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Get current page from query parameter
$startIndex = ($page - 1) * $itemsPerPage;
$endIndex = $startIndex + $itemsPerPage;
echo $endIndex ."<br>";

// Extract fruits for the current page
$fruitsOnPage = array_slice($fruits, $startIndex, $itemsPerPage);

foreach ($fruitsOnPage as $fruit) {
    echo $fruit . "<br/>";
}

// Pagination links
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i'>$i</a> ";
}



$colors = ['Red','Green','Blue','Yellow','Black','Orange','White','Purple'];

$slice1 = array_slice($colors,1,3);
$slice2 = array_slice($colors,1, 3);
$slice3 = array_slice($colors,2,4);
echo "<br>";
print_r($slice1);
echo "</br>";

print_r($slice2);
echo "</br>";

print_r($slice3);
echo "</br>";
echo "</br>";
echo "</br>";



$emptyArray = [];

array_push($emptyArray,"Hello");
array_push($emptyArray,"World");
print_r($emptyArray);
echo "</br>";
echo "</br>";
echo "</br>";

// $arrayPop = array_pop($emptyArray);
// echo $arrayPop;
// echo "</br>";

// print_r($emptyArray);

$arrayShift = array_shift($emptyArray);
echo $arrayShift;
echo "</br>";
echo "</br>";

print_r($emptyArray);

echo "</br>";echo "</br>";
?>

<?php
for($i = 1; $i <= 100; $i++){
    echo $i;
    echo "<br>";
}

for($i = 1; $i <=100; $i++){
    if($i % 3 == 0){
        echo "Fizz <br>";
    }elseif($i % 5 == 0){
        echo "Buzz <br>";
    }elseif($i % 15 == 0){
        echo "FizzBazz <br>";
    }else {
        echo "";
    }
}

