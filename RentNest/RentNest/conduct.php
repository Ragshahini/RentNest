<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "rentnest";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['summit'])) { // Fix the closing parenthesis
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $district = $_POST['district'];

    $sql_query = "INSERT INTO conduct_detail(firstname, lastname, email, country, district)
    VALUES ('$firstname', '$lastname', '$email', '$country', '$district')";

    if (mysqli_query($conn, $sql_query)) {
        echo "New Detail Entered";
    } else {
        echo "Error: " . $sql_query . " " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
