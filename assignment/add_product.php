<?php
include 'db.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 1 : 0;

    $sql = "INSERT INTO products (name, buying_price, selling_price, display) 
            VALUES ('$name', '$buying_price', '$selling_price', '$display')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully. <a href='index.php'>View Products</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Add Product</title></head>
<body>
    <fieldset style="width: 300px;">
        <legend><b>ADD PRODUCT</b></legend>
        <form method="post" action="">
            Name<br>
            <input type="text" name="name" required><br>
            Buying Price<br>
            <input type="number" name="buying_price" required><br>
            Selling Price<br>
            <input type="number" name="selling_price" required><br>
            <hr>
            <input type="checkbox" name="display"> Display<br>
            <hr>
            <input type="submit" name="save" value="SAVE">
        </form>
    </fieldset>
</body>
</html>