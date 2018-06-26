<?php include("header.php"); ?> <center>
<table class='table table-bordered'>
<tr><th>File name</th>
<th>Tags</th> </tr>
<?php
include("../dbinfo.php");


$sql = "SELECT * from files";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


		echo"<tr><td>" . $row["f_name"]. "   </td>";
		echo"<td>  " . $row["f_tags"]." </td> </tr>";

    }
} else {
    echo "0 results";
}
?></table>
<?php include("../footer.php"); ?>