<?php
include("connection.php");
$updateId = $_GET['tests_id'];
$query2 = "SELECT * FROM tests WHERE id = '" . $updateId . "' ";
$result2 = mysqli_query($connection, $query2);
while ($row = mysqli_fetch_assoc($result2)) {
    $first_Name = $_POST['Firstname'];
    $last_Name = $_POST['Last name'];
    $eye_test = $_POST['eye_test'];
    $bmi_test_Name = $_POST['bmi_test'];
    $dibetes_test = $_POST['diabetes_test'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>

<body>
    <centre>
        <form action="update_process.php?ID=<?php echo $updateId; ?>" method="post">
            <label for="">First Name</label>
            <input type="text" name="prodname" id="prod" value="<?php echo $first_Name; ?>"><br><br>
            <label for="">Last Name</label>
            <input type="text" name="description" id="description" value="<?php echo $last_Name; ?>"><br><br>
            <label for="">eye_test results</label>
            <input type="number" name="price" id="price" value="<?php echo $eye_test; ?>"><br><br>
            <label for="">Bmi_test results</label>
            <input type="text" name="prodname" id="prod" value="<?php echo $bmi_test; ?>"><br><br>
            <label for="">Diabetes_test results</label>
            <input type="text" name="prodname" id="prod" value="<?php echo $diabetes_test; ?>"><br><br>
            <button type="submit" name="update">update</button>


        </form>
        <button style="background-color: greenyellow;"><a href="dashboard.php" style="text-decoration: none;">View Items</a></button>
    </centre>

</body>

</html>