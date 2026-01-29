<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 1 : 0;

    $updateSql = "UPDATE products SET 
                  name='$name', 
                  buying_price='$buying_price', 
                  selling_price='$selling_price', 
                  display='$display' 
                  WHERE id=$id";

    if ($conn->query($updateSql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Product</title></head>
<body>
    <fieldset style="width: 300px;">
        <legend><b>EDIT PRODUCT</b></legend>
        <form method="post" action="">
            Name<br>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Buying Price<br>
            <input type="number" name="buying_price" value="<?php echo $row['buying_price']; ?>"><br>
            Selling Price<br>
            <input type="number" name="selling_price" value="<?php echo $row['selling_price']; ?>"><br>
            <hr>
            <input type="checkbox" name="display" <?php if($row['display'] == 1) echo "checked"; ?>> Display<br>
            <hr>
            <input type="submit" name="update" value="SAVE">
        </form>
    </fieldset>
</body>
</html>