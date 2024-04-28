<?php
$active='Account';
include("includes/header.php");
?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->


   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->    
        <div class="col-md-9"><!-- col-md-9 Begin -->
        <div class="box"><!-- box Begin -->

        <div class="box-header"><!-- box-header Begin -->
        <center><!-- center Begin -->
        <h2>Register a New Account</h2>
      


        </center><!-- center End -->
        <form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
        <div class="form-group">
            <label >Your Name</label>
            <input type="text" class="form-control" name="c_name" required>
        </div>
        <div class="form-group">
            <label > Your Email</label>
            <input type="text" class="form-control" name="c_email" required>
        </div>
        <div class="form-group">
            <label >Your Password</label>
            <input type="password" class="form-control" name="c_pass" required>
        </div>
       
        <div class="form-group">
            <label >Conform Password</label>
            <input type="password" class="form-control" name="c_pass" required>
        </div>

        <div class="form-group">
            <label >Your Contact</label>
            <input type="text" class="form-control" name="c_contact" required>
        </div>

        <div class="form-group">
            <label >Your Address</label>
            <input type="text" class="form-control" name="c_address" required>
        </div>

        <div class="form-group">
            <label >Your Profile Picture</label>
            <input type="file" class="form-control form-height-custom" name="c_image" required>
        </div>
       
        
       
        <div class="text-center">

        <button type="submit" name="register" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Register

        </button>
        </div>

        </form>

        </div><!-- box-header End -->


        </div><!-- box Finish-->

        </div><!-- col-md-9 Finish -->
                     
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>