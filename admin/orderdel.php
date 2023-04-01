<?php
$id = $_GET['id'];
echo $id;
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method

$conn = mysqli_connect("localhost","root","","kings");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "INSERT INTO historY SELECT * FROM customer_order WHERE code = '$id'"; 
$sql1 = "DELETE FROM customer_order WHERE code = '$id'";
if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
    mysqli_close($conn);
    header('Location: orderdisplay.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>