<?php
	include "connection.php";
	$category_id=$_POST["c_id"];
	$result = mysqli_query($connect,"select * from subcategory_tbl where c_id=$category_id");
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["sc_id"];?>"><?php echo $row["sc_name"];?></option>
<?php
}
?>