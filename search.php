
<?php
//include header  of html
 include('header.php');
?>

<header dir = "ltr">
			<a href="index.html" class="logo">Airplanes </a>
			<nav class="navigation">
				<i><a href="index.html">Home</a></i>
				<i><a href="search.php">search flights</a></i>
				<i><a href="login.php">login to admin</a></i>
				

			</nav>
			<div class="icons" >
				<a href="https://www.facebook.com/profile.php?id=100012628351817"><i class="fab fa-facebook"></i></a>
				<a href="https://instagram.com/firas_al.farra?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><i class="fab fa-instagram"></i></a>
		 </div>
		  </header>
 
           <center>
            <div dir="ltr" class=" text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form action="search.php" method="post">
                        
                <input type="text" name="airport1" placeholder="From Airport " style="width: 240px;height: 35px;"><span><span>
                <input type="text" name="airport2" placeholder="TO Airport " style="width: 240px;height: 35px;"><span><span>

                  <input type="submit" name="show" value="search" class=" btn-primary btn-lg " style="background:#1746A2 !important; color:white;" style="margin-left: 30px;" ><br><br>
                   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</center>
            
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {
        ?>

        <table style="margin-top:70px;"  dir="ltr" class="table table-bordered table-responsive text-center" >
        <thead style = " color: white ; ">
        <tr>
            <th class="text-center">Flight Number</th>
            <th class="text-center">From Airport</th>
            <th class="text-center">To Airport</th>
            <th class="text-center">Date</th>
            <th class="text-center">Time</th>
            <th class="text-center">Seats</th>
            <th class="text-center">Price</th>

    
        </tr>
        </thead>
        <?php
    

        $airport1 = $_POST['airport1'];
        $airport2 = $_POST['airport2'];

        $sql = "SELECT * FROM `flights` WHERE  `airport1`='$airport1' and `airport2`='$airport2'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
            
                $id = $DataRows['id'];
                $airport1 = $DataRows['airport1'];
                $airport2 = $DataRows['airport2'];
                $date = $DataRows['date'];
                $time = $DataRows['time'];
                $seats = $DataRows['seats'];                
                $price = $DataRows['price'];                

                ?>
                <tr style = " color: white ; " > 
                    <td><?php echo  $id;?></td>
                    <td><?php echo $airport1;?></td>
                    <td><?php echo $airport2; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $time; ?></td>
                    <td><?php echo $seats; ?></td>
                    <td><?php echo $price; ?></td>

                    
                </tr>
                <?php
             
            }
            
        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Flights</td></tr>";
            
        }
    }

 ?>
    


<!--include header  of html-->
<?php include('footer.php') ?>