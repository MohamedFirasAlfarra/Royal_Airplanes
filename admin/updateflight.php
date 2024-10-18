<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php
//include header  of html
 include('../header.php');
  include('admin.header.php') ?>



 
           <center>
            <div dir="ltr" class=" text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form action="updateflight.php" method="post">
                        
                <input type="text" name="id" placeholder="Enter Flight Number " style="width: 240px;height: 35px;"><span><span>
                

                  <input type="submit" name="show" value="search" class=" btn-primary btn-lg " style="background:#1746A2 !important; color:white;" style="margin-left: 30px;" ><br><br>
                   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</center>
            
<?php 
    include('../dbcon.php');
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
            <th class="text-center">Action</th>

    
        </tr>
        </thead>
        <?php
    

        $Id = $_POST['id'];
        

        $sql = "SELECT * FROM `flights` WHERE  `id`='$Id' ";

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
                    <td><a href="UpdateRecord.php?update=<?php echo $id; ?>" class=" btn-primary" style="padding:5px 10px;">Edit</a></td>

                    
                </tr>
                <?php
             
            }
            
        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Flights</td></tr>";
            
        }
    }

 ?>
    



<?php include('../footer.php') ?>







    
