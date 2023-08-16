<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Select</title>
    <?php 
        if(isset($_POST['gender']))
        {
            $gen = $_POST['gender'];
            echo "Selected Gender : " . $gen;
        }
    ?>
</head>
<body>
<form action="" method="post" name="genderForm" id="genderForm" onsubmit="clickHere(); return false">   
<table>
    <tr>
        <td>Gender:</td>
        <td> 
            <input type="radio" name="gender" value="male" <?php if($gen === "male") echo "checked"; ?> />Male
            <input type="radio" name="gender" value="female" <?php if($gen === "female") echo "checked"; ?> />Female
            <input type="radio" name="gender" value="other" <?php if($gen === "other") echo "checked"; ?> />Other
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="Submit" />
            <input type="reset" value="Clear" />
        </td>
    </tr>
</table>
</form>
<div id="show"></div>

<script>
function clickHere(){
    var genderLeng = document.genderForm.gender.length;
    for(i=0; i<genderLeng;i++){
        var checkValue = document.genderForm.gender[i], checked;
    }
    if(checkValue){
        var checkResult = document.genderForm.gender.value;
    }
    var showData = "Gender : " + checkResult;
    document.getElementById('show').innerHTML = showData;
}
</script>
</body>
</html>