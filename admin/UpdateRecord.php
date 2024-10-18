<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?> 
<?php 

	include('../dbcon.php');
	$Id = $_GET["update"];
	$sql = "select * from flights where id = '$Id'";
	$result = mysqli_query($conn,$sql);

	while ($data_row = mysqli_fetch_assoc($result)) {

		$id = $data_row['id'];
		$airport1 = $data_row['airport1'];
		$airport2 = $data_row['airport2'];
		$date = $data_row['date'];
		$time = $data_row['time'];
		$seats = $data_row['seats'];
		$price = $data_row['price'];


	}

 ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div dir="ltr" class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">Edit Flight</h2>
			<form action="UpdateRecord.php?id_f=<?php echo $id;?>" method="post" >
			
				  <div class="form-group">
				 From Airport<input type="text" class="form-control" name="airport1" value="<?php echo 
				    $airport1;?>"  required>
				  </div>
				  <div class="form-group">
				    To Airport <input type="text" class="form-control" name="airport2" value="<?php echo $airport2;?>"  required>
				  </div>
				  <div class="form-group">
				  Date <input type="date" class="form-control" name="date" value="<?php echo $date;?>" required>
				  </div>
				  <div class="form-group">
				  Time <input type="time" class="form-control" name="time" value="<?php echo $time;?>" required>
				  </div>
				  <div class="form-group">
				  Seats <input type="text" class="form-control" name="seats" value="<?php echo $seats;?>" required>
				  </div>
				  <div class="form-group">
				  Price <input type="text" class="form-control" name="price" value="<?php echo $price;?>" required>
				  </div>
				  <div class="form-group">
				  <button type="submit" name="submit" class="btn btn-success btn-lg">Update</button>
                 </div>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>


<?php 
//update button
	if (isset($_POST['submit'])) {
		if (!empty($_POST['airport1'])) {
			include ('../dbcon.php');
			$id_flight = $_GET['id_f'];
			$airport1=$_POST['airport1'];
			$airport2=$_POST['airport2'];
			$date=$_POST['date'];
			$time=$_POST['time'];
			$seats=$_POST['seats'];
			$price=$_POST['price'];
			
			$sql = "UPDATE flights SET airport1 = '$airport1', airport2='$airport2', date = '$date', time = '$time', seats = '$seats' , price = '$price' WHERE id = '$id_flight'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
                Redirect_to("updateflight.php");


		}

	}

	}

 ?>
