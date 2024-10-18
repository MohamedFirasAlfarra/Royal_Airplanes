<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>
<?php include('admin.header.php') ?>

<div style='margin-top:10px;' class="admin-dashboard text-center">
        <div class="container">
        	
            <div>
                <div class="row">
               
                    <div dir="ltr"  class="col-md-6 col-md-offset-3 jumbotron" >
                
                    <a href="veiw.php" class=" btn-primary btn-lg btn-block"    style="background:#1746A2 !important; color:white;">Veiw Flights</a><br><br>
                        <a href="addflight.php" class=" btn-primary btn-lg btn-block"    style="background:#1746A2 !important; color:white;">AddFlight</a><br><br>
                        <a href="updateflight.php" class=" btn-primary btn-lg btn-block" style="background:#1746A2 !important; color:white;">Edit Flight</a><br><br>
                        <a href="search.php" class=" btn-primary btn-lg btn-block"    style="background:#1746A2 !important; color:white;">Search Flight</a><br><br>
                        <a href="deleteflight.php" class=" btn-primary btn-lg btn-block" style="background:#1746A2 !important; color:white;">Delete Flight</a>   
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('../footer.php') ?>
