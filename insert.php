<?php
$conn = new mysqli("localhost", "root", "", "assignment_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$book_name = $_POST['book_name'];
$author = $_POST['author'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "INSERT INTO roll_101 (book_name, author, price, stock) VALUES ('$book_name', '$author', '$price', '$stock')";

if ($conn->query($sql) === TRUE) {
    echo "<span style='color: green;'>Record inserted successfully!</span>";
} else {
    echo "<span style='color: red;'>Error: " . $conn->error . "</span>";
}

$conn->close();
?>
