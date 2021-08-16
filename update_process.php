<?php
include("connection.php");
$updateId = $_GET['ID'];
if (isset($_POST['update'])) {

    $first_Name = $_POST['Firstname'];
    $last_Name = $_POST['Last name'];
    $eye_test = $_POST['eye_test'];
    $bmi_test_Name = $_POST['bmi_test'];
    $dibetes_test = $_POST['diabetes_test'];
    if (!empty($_POST['Firstname']) || !empty($_POST['Last name']) || !empty($_POST['eye_test']) !empty($_POST['bmi_test']) !empty($_POST['diabetes_test'])) {
        $query3 = "UPDATE tests SET Firstname = '" . $first_Name . "', Last name = '" . $last_Name . "', eye_test = '" .$eye_test . "',bmi_test = '" .$bmi_test . "', diabetes_test = '" .$diabetes_test . "' WHERE id = '" . $updateId . "'";
        $result3 = mysqli_query($connection, $query3);
        if ($result3) {
            header("Location: dashboard.php");
        }
    } else {
        echo "Error occured";
    }
} else {
    header("Location: dashboard.php");
}
