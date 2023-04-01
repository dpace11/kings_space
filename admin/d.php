<html><head><title>MySQL Table Viewer</title></head><body>
<?php
$db_host = 'localhost';
$db_user = 'username'; 
$db_pwd = 'password';

$database = 'kings'; 
$table = 'clothes';
$con=mysqli_connect("localhost","root","","database");
if(!$con){
die("Can not connect" . mysql_error()); 
}



// sending query
$result = mysqli_query($con,"SELECT * FROM {$table}");

$fields_num = mysqli_num_fields($result);

echo "<h1>Table: {$table}</h1>";
echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
$field = mysqli_fetch_field($result);
echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysqli_fetch_row($result))
{
echo "<tr>";


foreach($row as $cell)
echo "<td>$cell</td>";
//echo '<form method="POST" name="deleterequest" action ="delete.php">';
 //       echo "<input name='record_id' type='hidden' value='".$row['id']."'
 //>";
      //  echo "<input name='delete'type='submit' value='Delete' >";
      //  echo "</form>";

echo "</tr>\n";

}
echo "</table>";
mysqli_close($con);
?>