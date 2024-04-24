<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <script src="js/tinymce/jstinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>



 <div class="row"><!-----row-begin----->
<div class="col-lg-12"><!-----cpl-lg-12-begin----->
<ol class="breadcrumb">
    <li class="active">
     <i class="fa fa-dashboard"></i>Dashboard/Insert Products
    </li><!------li--begin----->
</ol>
</div><!-----col-lg-12-end----->

 </div><!-----row-end----->

<div class="row"><!-----row-begin----->
    <div class="col-lg-12"><!-----cpl-lg-12-begin----->

    
        <div class="panel panel-default"><!-----panel panel-default-begin----->
            <div class="panel-heading"><!-----panel-heading-begin---->
                <h3 class="panel-title"><!-----panel-title-begin---->
                    <i class="fa fa-money fa-fw"></i>Insert Product
                 </h3><!-----panel-title-end---->
            </div><!-----panel-headin-end---->
            <div class="panel-body"><!-----panel-body-begin---->
                <form  method="post" class="form-horizontal" enctype="multipart/form-data"><!-----form-horizontal-begin---->

                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label">Product Title</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <input name="product_title"type="text" class="form-control" required>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->
                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label">Product Category</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <select name="product_cat"  class="form-control"><!-----form-control-begin---->
                    <option>Select a Category Product</option>
                    
                    <?php
                    $get_p_cats="select * from product_categories";
                    $run_p_cats=mysqli_query($con,$get_p_cats);

                    while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
                        $p_cat_id=$row_p_cats['p_cat_id'];
                        $p_cat_title=$row_p_cats['p_cat_title'];
                        echo"
                        <option value='$p_cat_id'> $p_cat_title</option>
                        
                        
                        ";
                    }
                    
                    ?>

                    </select>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->
                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label"> Category</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <select name="product_cat"  class="form-control"><!-----form-control-begin---->
                    <option>Select a Category</option>
                    
                    <?php
                    $get_cat="select * from categories";
                    $run_cat=mysqli_query($con,$get_cat);

                    while ($row_cat=mysqli_fetch_array($run_cat)) {
                        $cat_id=$row_cat['cat_id'];
                        $cat_title=$row_cat['cat_title'];
                        echo"
                        <option value='$cat_id'> $cat_title</option>
                        
                        
                        ";
                    }
                    
                    ?>

                    </select>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->
                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label">Product Image 1</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <input name="product_img1"type="file" class="form-control" required>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->
                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label">Product Image 2</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <input name="product_img2"type="file" class="form-control" required>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->
                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label">Product Image 3</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <input name="product_img3"type="file" class="form-control" required>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->
                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label">Product Price</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <input name="product_price"type="text" class="form-control" required>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->
                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label">Product Keywords</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <input name="product_keywords"type="text" class="form-control" required>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->
                <div class="form-group"><!-----form-group-begin---->
                    <label  class="col-md-3 control-label">Product Desc</label>
                    <div class="col-md-6"><!-----col-md-6-begin---->
                    <textarea name="product_desc"  cols="19" rows="16" class="form-control"></textarea>
                    </div><!-----col-md-6-end---->

                </div><!-----form-group-end---->


                </form><!-----form-horizontal-end---->


            </div><!-----panel-body-end---->
        </div><!-----panel panel-default-end----->
     </div><!-----col-lg-12-end----->
</div><!-----row-end----->
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>