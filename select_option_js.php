<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Coder</title>
    <script>
        function selectLanguage(){
            var index = document.languageSelectForm.language.selectedIndex;
            var value = document.languageSelectForm.language.options[index].value;
            var showData = "You are "+value+" Developer";
            document.getElementById('show').innerHTML=showData;
        }
    </script>
</head>
<body>
    <div id="show"></div>
    <h3>Programming Language</h3>
    <form action="" method="post" name="languageSelectForm" id="languageSelectForm" onsubmit="selectLanguage(); return false" >
    <!-- For change event-->
    <!-- <form action="" method="post" name="languageSelectForm" id="languageSelectForm" onchange="selectLanguage(); return false" > -->
        <select name="language" id="language">
            <option value="">Select One</option>
            <option value="PHP">PHP</option>
            <option value="JAVA">JAVA</option>
            <option value="C#">C#</option>
            <option value="C++">C++</option>
            <option value="Python">Python</option>
        </select>
            <br/>
            <br/>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" name="clear" value="Clear" />
    </form>
</body>
</html>