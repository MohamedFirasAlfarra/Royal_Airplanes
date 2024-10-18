<?php session_start();?>

<?php include('header.php') ?>



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

   
            <div style='margin-top:10px;' dir="ltr" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 jumbotron">
                            <Center>
                                <h2>login</h2>
                            </Center>
                            <form action="login.php" method="post">
                              <div class="form-group">
                    username :<input type="text" class="form-control" name="user" placeholder="enter username" required>
                              </div>
                            <div class="form-group">
                                 password :<input type="password" class="form-control" name="password" placeholder="enter password" required>
                            </div>
                              <div class="form-group">
                                  <input style="background:#1746A2 !important;" type="submit" name="login" value="login" class="btn btn-success btn-block text-center" > 
                              </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    include ('dbcon.php');

    if (isset($_POST['login'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM admin WHERE username='$user' AND password='$password'";
        
        $run  = mysqli_query($conn, $qry);

       $row = mysqli_num_rows($run);

        if($row > 0) {
         $data = mysqli_fetch_assoc($run);
                    $id= $data['id'];
                    $_SESSION['uid'] = $id;
                    header('location:admin/admindash.php');

           
        } else {
      ?>             
    <script>
        alert('username or passoword invalid');
        window.open('login.php','_self');
    </script>
    <?php
                   
                }

}
?>

<?php include('footer.php') ?>