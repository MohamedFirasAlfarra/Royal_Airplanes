<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>
<?php 

include('../dbcon.php');
$delete_id = $_GET['Delete'];


$sql = "delete  from `flights` where id = $delete_id";

$result = mysqli_query($conn,$sql);

if ($result) {
	
	?>
	<script>
		alert("the flight deleted");
	</script>
	<?php
	echo '<script>window.open("deleteflight.php?deleted=the flight deleted","_self")</script>';
}


 ?>