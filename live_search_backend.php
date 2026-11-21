<?php
$conn = new mysqli("localhost", "root", "", "assignment_db");
$q = $_GET['q'] ?? '';

$sql = "SELECT * FROM roll_101 WHERE book_name LIKE '%$q%' OR author LIKE '%$q%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Book Name</th><th>Author</th><th>Price</th><th>Stock</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["book_name"]."</td><td>".$row["author"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No matching records found.";
}
$conn->close();
?>
