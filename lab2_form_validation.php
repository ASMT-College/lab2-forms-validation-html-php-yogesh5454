<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_GET['submit']))
{
    $email2 = $_GET['email2'];
    $emailRegex = "/[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/";
    if(preg_match($emailRegex,$email2)){
        echo"valid;signup completed; Insert to db";

    }
else{
    echo"Invalid email2";
    }
}

?>
<body>
    <form action="" method="get" onsubmit="return validateForm()">
        <div>signup</div>
        <div>username: <input type="text" name="un" id="un" required minlength="6"></div>
        <div>password: <input type="password" name="pw" id="pw" required></div>
        <div>email1: <input type="email" name="email1" id="email1" required></div>
        <div>email2: <input type="text" name="email2" id="email2" ></div>
        <div id="emailerror"></div>
        <div><input type="submit" value="signup" name="submit"></div>
    </form>

    <script>
        function validateForm() {

            var emailRegex = /[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
            var email2 = document.getElementById('email2').value

        if(emailRegex.test(email2)){
            return true

        }
        else{
            document.getElementById("emailerror").innerHTML = "Invalid email2"
            return false;
        }
        }
        </script>
</body>
</html>