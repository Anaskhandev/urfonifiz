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
            <h1 class="h3 mb-4 text-gray-800">Edit brand</h1>
            <div class="row">
              <div class="col-md-6">
              <?php
                if(isset($_GET['br_id'])){
                    $sql = "select * from all_brands where br_id = '".$_GET['br_id']."'";
                    $result = mysqli_query($connection, $sql);
                    
                    foreach($result as $row)
                    {
                ?>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="br_id" name="br_id" value="<?php echo $row['br_id']?>">
                        <div class="form-group">
                            <label for="">brand Name</label>
                            <input type="text" class="form-control" name="br_name" id="br_name" value="<?php echo $row['br_name']?>">
                        </div>
                        <div class="form-group">
                            <label>brand Alt</label>
                            <input type="text" class="form-control" name="br_alt" id="br_alt" value="<?php echo $row['br_alt']?>">
                        </div>
                        <div class="form-group">
                        <label for="br_image">brand Image</label>
                            <div class="custom-file">
                            <input type="file" name="br_image"  accept="image/*" value="<?php echo $row['br_image']?>" id="br_image">
                                <label class="custom-file-label" for="br_image">Choose file...</label>
                            </div>
                        </div>
                        <input type="submit" name="update" value="Update" class="btn btn-success px-5 py-2 rounded-pill">
                    </form>
                <?php
                        }
                    }

                    // update user by id functionality
                    if (isset($_POST['update'])) {
                        $br_id = $_POST['br_id'];
                        $br_name = $_POST['br_name'];
                        $br_alt = $_POST['br_alt'];
                        $br_image = $_FILES['br_image']['name'];
                        $br_image_temp=$_FILES['br_image']['tmp_name'];

                   
                    
                        if($br_image_temp != "")
                        {
                            $destfile = "./img/".$br_image;
                            move_uploaded_file($br_image_temp ,$destfile);
                            $br_update="update all_brands set br_name='$br_name', br_alt='$br_alt', br_image='$destfile' where br_id='".$_GET['br_id']."'";   
                        }else
                        {
                            $br_update="update all_brands set br_name='$br_name', br_alt='$br_alt' where br_id='".$_GET['br_id']."'";
                        }
                        
                        $run_update=mysqli_query($connection, $br_update);

                        // if($fileerror == 0)
                        // {
                        //     $destfile = "./img/".$filename;
                        //     move_uploadebr_file($filepath ,$destfile);
                    
                        //     // $sql= "UPDATE all_brands SET br_name='$br_name', br_alt='$br_alt', br_image='$destfile' where br_id='".$_GET['br_id']."'";
                        //     // $result = mysqli_query($connection,$sql);
                        // }

                        // $sql = "update all_brands set br_name='$br_name', br_alt='$br_alt', br_image='$destfile' where br_id='".$_GET['br_id']."'";
                        // $result = mysqli_query($connection, $sql);

                    }
                ?>
              </div>
              <div class="col-md-12 text-right pt-4">
                    <a href="view-brands.php" class="btn btn-primary btn-icon-split">
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