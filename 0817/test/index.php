<?php
    //var_dump($_POST); 把物件dump出來看{}
    session_start();
    
    if(isset($_POST['OK_btn'])){
        if($_POST['userName'] == "")
            echo ("Plz enter username!");

        $userName = $_POST['userName'];
        $email = $_POST['email'];

        $_SESSION['s_user'] = $userName;
        header("Location:hello.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <form method="post" action="index.php" >
        Your Name: <input type="text" name="userName">
        <br>Email: <input type="text" name="email">
        <input type="submit" name="OK_btn" value="OK">
    </form>
</body> 
</html>