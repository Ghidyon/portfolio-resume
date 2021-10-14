<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "IjeomaDb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname); //variables can be used
    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //echo "connected succesfully" . "<br/>";
    }

    //creating a new table and checking for errors or duplicates.

    // $check = "CREATE TABLE IjeomaTable (ID int NOT NULL AUTO_INCREMENT, Name text(50), email varchar(50), message varchar(255), PRIMARY KEY (ID))";
    // if ($conn->query($check) === TRUE) {
    //     echo "Table created successfully<br>";
    // } else {
    //     echo $conn->error;
    // }


    
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO IjeomaTable (name,email,message) VALUES ('$name','$email','$message')";



// if($rs)
// {
// 	echo "Data Submitted Successfully";
// } else {
//     echo "Data NOT submitted"
// }
if ($conn->query($sql) === TRUE) {

    echo "Message Sent";

} else {

    echo "Submission Error" . $sql . "<br>" . $conn->error;

}



$conn->close();