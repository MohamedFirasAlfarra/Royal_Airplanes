<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>
<?php
//include header  of html
 include('../header.php');
?>
 <?php include('admin.header.php') ?>
  
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
       include('../dbcon.php');

       

       $sql = "SELECT * FROM `flights`";
       $result = mysqli_query($conn,$sql);
       foreach ($result as $row) {
           # code...
           echo "<tr style = ' color: white ;'>";
           echo "<td>".$row['id']."</td>";
           echo "<td>".$row['airport1']."</td>";
           echo "<td>".$row['airport2']."</td>";
           echo "<td>".$row['date']."</td>";
           echo "<td>".$row['time']."</td>";
           echo "<td>".$row['seats']."</td>";
           echo "<td>".$row['price']."</td>";
           echo "</tr>";
    




       }

      ?>







 
<?php include('../footer.php') ?>