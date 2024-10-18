<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div dir="ltr"  class="container jumbotron">
	<div  class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">Add Flight</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
				  <div class="form-group">
				      Flight Number<input type="text" class="form-control" name="id"  required>
				  </div>
				  <div class="form-group">
				  
				  <div class="form-group">
				  From Airport<input type="text" class="form-control" name="airport1"  required>
				  </div>

				  <div class="form-group">
				  To Airport<input type="text" class="form-control" name="airport2"  required>
				  </div>

				  <div class="form-group">
				  Date Flight<input type="date" class="form-control" name="date"  required>
				  </div>

				  <div class="form-group">
				  Time Flight<input type="time" class="form-control" name="time"  required>
				  </div>


				  <div class="form-group">
				  Seats<input type="text" class="form-control" name="seats"  required>
				  </div>
				  <div class="form-group">
				   
				  <div class="form-group">
				       Price<input type="" class="form-control" name="price"  required>
				  </div>
				  <div class="form-group">
				  
				 
				   

				
				   
				  <button type="submit" name="submit" class="btn  btn-lg" style="color:white;background:black;">Add Flight</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['id']) && !empty($_POST['airport1'])) {
		
			include ('../dbcon.php');
			$id=$_POST['id'];
			$airport1=$_POST['airport1'];
			$airport2=$_POST['airport2'];
			$date=$_POST['date'];
			$time=$_POST['time'];
			$seats=$_POST['seats'];
			$price=$_POST['price'];
			

			$sql = "INSERT INTO `flights`( `id`, `airport1`, `airport2`, `date`,`time`, `seats`,`price`) VALUES ('$id','$airport1','$airport2','$date','$time','$seats','$price')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("There flight was added successfuly");
				</script>
				<?php
			} else {
				echo "eroor: ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("plese enter FLight Number");
				</script>
				<?php
		}


	}

 ?>








