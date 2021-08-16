<?php
include('connection.php');
$deleteId = $_GET['tests_id'];
$query = "DELETE FROM tests WHERE id = '" . $deleteId . "'";
$result = mysqli_query($connection, $query);
if ($result) {
    header("Location: home.php");
} else {
    echo "Some error occured";
}
