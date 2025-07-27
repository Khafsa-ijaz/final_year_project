<?php
include('connection.php');
$id=$_GET['id'];

    $delete_user = mysqli_query($conn,"UPDATE enquiry set status='1' WHERE id=$id");


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3;url=http://localhost/cs&it/web/index12.php">
    <title>Email Verification Success</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
        }
        p {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your email has been verified successfully!</h1>
        <p>You will be redirected shortly. If not, <a href="http://localhost/cs&it/web/index12.php">click here</a>.</p>
    </div>
</body>
</html>
