<?php
    $user='root';
    $password='cahadeoro';
    $servername='localhost:3310';
    $database='MINGTECH';

    //create an instance to see if the database connects to the server
    $mysqli=new mysqli($servername,$user,$password,$database);

    if($mysqli->connect_error)
    {
        die('Connect Error('.$mysqli->maxdcb_connect_errno.')').maxdb_connect_error;
    }
    $mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        
    </style>
</head>
<body>
    <form action="admin.php">
        <input type="submit" name="" value="Disconnect PC" />
    </form>
</body>
</html>