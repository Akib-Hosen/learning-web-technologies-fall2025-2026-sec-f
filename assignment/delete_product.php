<?php
include 'db.php';

$id = $_GET['id'];

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM products WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Fetch data to show confirmation details
$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Delete Product</title></head>
<body>
    <fieldset style="width: 300px;">
        <legend><b>DELETE PRODUCT</b></legend>
        <form method="post" action="">
            Name: <?php echo $row['name']; ?><br>
            Buying Price: <?php echo $row['buying_price']; ?><br>
            Selling Price: <?php echo $row['selling_price']; ?><br>
            Displayable: <?php echo ($row['display'] == 1) ? 'Yes' : 'No'; ?><br>
            <hr>
            <input type="submit" name="delete" value="Delete">
        </form>
    </fieldset>
</body>
</html>