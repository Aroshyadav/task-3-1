<?php
$conn = new mysqli("localhost", "root", "", "assignment_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM 2024CSB018_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Book Name</th><th>Author</th><th>Price</th><th>Stock</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["book_name"]."</td><td>".$row["author"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}
$iconn->close();
?>
