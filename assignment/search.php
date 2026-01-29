<?php
include 'db.php';

$q = isset($_GET['q']) ? $_GET['q'] : "";

$sql = "SELECT * FROM products WHERE display = 1 AND name LIKE '%$q%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $profit = $row['selling_price'] - $row['buying_price'];
        
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $profit . "</td>";
        echo "<td><a href='edit_product.php?id=" . $row['id'] . "'>edit</a></td>";
        echo "<td><a href='delete_product.php?id=" . $row['id'] . "'>delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No products found</td></tr>";
}
?>