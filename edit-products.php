<?php 
 include('./config.php');

 session_start();
 if(!isset($_SESSION['user'])){
     header('location:admin-login.php');
 }

 include('admin-header.php');
 ?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit product</h1>
            <div class="row">
              <div class="col-md-6">
              <?php
                if(isset($_GET['pr_id'])){
                    $sql = "select * from all_products where pr_id = '".$_GET['pr_id']."'";
                    $result = mysqli_query($connection, $sql);
                    
                    foreach($result as $row)
                    {
                ?>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="pr_id" name="pr_id" value="<?php echo $row['pr_id']?>">
                        <div class="form-group">
                            <label for="">product Name</label>
                            <input type="text" class="form-control" name="pr_name" id="pr_name" value="<?php echo $row['pr_name']?>">
                        </div>
                        <div class="form-group">
                            <label>product price</label>
                            <input type="text" class="form-control" name="pr_price" id="pr_price" value="<?php echo $row['pr_price']?>">
                        </div>
                        <div class="form-group">
                        <label for="pr_images">product Images</label>
                            <div class="custom-file">
                            <input type="file" name="pr_images"  accept="images/*" value="<?php echo $row['pr_images']?>" id="pr_images">
                                <label class="custom-file-label" for="pr_images">Choose file...</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>product description</label>
                            <input type="text" class="form-control" name="pr_description" id="pr_description" value="<?php echo $row['pr_description']?>">
                        </div>
                        <div class="form-group">
                            <label>product specification</label>
                            <input type="text" class="form-control" name="pr_specification" id="pr_specification" value="<?php echo $row['pr_specification']?>">
                        </div>
                        
                        <input type="submit" name="update" value="Update" class="btn btn-success px-5 py-2 rounded-pill">
                    </form>
                <?php
                        }
                    }

                    // update user by id functionality
                    if (isset($_POST['update'])) {
                        $pr_id = $_POST['pr_id'];
                        $pr_name = $_POST['pr_name'];
                        $pr_price = $_POST['pr_price'];
                        $pr_description = $_POST['pr_description'];
                        $pr_specification = $_POST['pr_specification'];
                        $pr_images = $_FILES['pr_images']['name'];
                        $pr_images_temp=$_FILES['pr_images']['tmp_name'];

                   
                    
                        if($pr_images_temp != "")
                        {
                            $destfile = "./img/".$pr_images;
                            move_uploaded_file($pr_images_temp ,$destfile);
                            $pr_update="update all_products set pr_name='$pr_name', pr_price='$pr_price', pr_description='$pr_description', pr_specification='$pr_specification', pr_images='$destfile' where pr_id='".$_GET['pr_id']."'";   
                        }else
                        {
                            $pr_update="update all_products set pr_name='$pr_name', pr_price='$pr_price', pr_description='$pr_description', pr_specification='$pr_specification' where pr_id='".$_GET['pr_id']."'";
                        }
                        
                        $run_update=mysqli_query($connection, $pr_update);

                        // if($fileerror == 0)
                        // {
                        //     $destfile = "./img/".$filename;
                        //     move_uploadepr_file($filepath ,$destfile);
                    
                        //     // $sql= "UPDATE all_products SET pr_name='$pr_name', pr_alt='$pr_alt', pr_images='$destfile' where pr_id='".$_GET['pr_id']."'";
                        //     // $result = mysqli_query($connection,$sql);
                        // }

                        // $sql = "update all_products set pr_name='$pr_name', pr_alt='$pr_alt', pr_images='$destfile' where pr_id='".$_GET['pr_id']."'";
                        // $result = mysqli_query($connection, $sql);

                    }
                ?>
              </div>
              <div class="col-md-12 text-right pt-4">
                    <a href="view-products.php" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-eye"></i>
                        </span>
                        <span class="text">View</span>
                    </a>
              </div>
          </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

<?php
include('admin-footer.php');
?>