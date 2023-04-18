<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action</title>
</head>

<body>
    <?php
    //servername => localhost
    //username => root
    //password => password
    //database name => zoo
    $conn = new mysqli('localhost', 'root', '', 'zoo');
    //check the connection.
    if ($conn === false) {
        die("Error: Could not connect." . mysqli_connect_error());
    }
    //insert query.
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $types = $_POST['types'];
    $quantity = $_POST['quantity'];

    //our tablename is ticket
    $sql = "INSERT INTO ticket( fname, phone, email, types, quantity)VALUES ('$fname', '$phone' , '$email' , '$types' , '$quantity')";
    if (mysqli_query($conn, $sql)) {                      //if insert successful, then print a success message.
        echo 'Success';
    } else {                                             //otherwise, print the error message.
        echo 'Error'
            . mysqli_error($conn);
    }

    $conn->close();


    ?>
</body>

</html>