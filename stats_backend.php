<?php
$conn = new mysqli("localhost", "root", "", "assignment_db");
$result = $conn->query("SELECT * FROM roll_101");

$prices = [];
$rows = [];

while($row = $result->fetch_assoc()) {
    $prices[] = $row['price'];
    $rows[] = $row;
}

$total = array_sum($prices);
$count = count($prices);
$average = $count > 0 ? $total / $count : 0;

echo "<h3>Total Price Sum: $total | Average Price: " . number_format($average, 2) . "</h3>";

echo "<table>
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Price (Numeric)</th>
            <th>Category</th>
        </tr>";

foreach($rows as $row) {
    $p = $row['price'];
    // Conditions: > 800 = A, > 400 = B, else C
    if ($p > 800) {
        $grade = 'A';
    } elseif ($p > 400) {
        $grade = 'B';
    } else {
        $grade = 'C';
    }

    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['book_name']}</td>
            <td>{$p}</td>
            <td><strong>{$grade}</strong></td>
          </tr>";
}
echo "</table>";

$conn->close();
?>
