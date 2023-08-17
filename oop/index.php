<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator by OOP</title>
    <?php include "calculator.php"; ?>
</head>
<body>
    <form action="" method="post" name="calculator">
        <table>
            <tr>
                <td>
                    Number One <input type="number" name="num1" value="<?php if(isset($_POST['num1'])){ echo $_POST['num1'];} ?>" placeholder="Enter only numeric value" />
                </td>
            </tr>
            <tr>
            <td>
                    Number Two <input type="number" name="num2" value="<?php if(isset($_POST['num2'])){ echo $_POST['num2'];} ?>" placeholder="Enter only numeric value" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Calculate" />
                    <input type="button" onclick="onClear()" value="Clear" />
                </td>
            </tr>
        </table>
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            if(empty($num1) or empty($num2)){
                echo "The fields value are required <br>";
            }else{
                echo "First Number is: " . $num1 . "<br>";
                echo "Second Number is: " . $num2 . "<br>";
            $cal = new Calculator;
            $cal->sum($num1,$num2);
            echo "<br>";
            $cal->subtract($num1,$num2);
            echo "<br>";
            $cal->multiply($num1,$num2);
            echo "<br>";
            $cal->divided($num1,$num2);
            }
        }
    ?>
    <script>
        function onClear(){
            document.calculator.num1.value = "";
            document.calculator.num2.value = "";

        }
    </script>
</body>
</html>