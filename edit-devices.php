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
            <h1 class="h3 mb-4 text-gray-800">Edit Device</h1>
            <div class="row">
              <div class="col-md-6">
              <?php
                if(isset($_GET['d_id'])){
                    $sql = "select * from all_devices where d_id = '".$_GET['d_id']."'";
                    $result = mysqli_query($connection, $sql);
                    
                    foreach($result as $row)
                    {
                ?>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="d_id" name="d_id" value="<?php echo $row['d_id']?>">
                        <div class="form-group">
                            <label for="">Device Name</label>
                            <input type="text" class="form-control" name="d_name" id="d_name" value="<?php echo $row['d_name']?>">
                        </div>
                        <div class="form-group">
                            <label>Device Alt</label>
                            <input type="text" class="form-control" name="d_alt" id="d_alt" value="<?php echo $row['d_alt']?>">
                        </div>
                        <div class="form-group">
                        <label for="d_image">Device Image</label>
                            <div class="custom-file">
                            <input type="file" name="d_image"  accept="image/*" value="<?php echo $row['d_image']?>" id="d_image">
                                <label class="custom-file-label" for="d_image">Choose file...</label>
                            </div>
                        </div>
                        <input type="submit" name="update" value="Update" class="btn btn-success px-5 py-2 rounded-pill">
                    </form>
                <?php
                        }
                    }

                    // update user by id functionality
                    if (isset($_POST['update'])) {
                        $d_id = $_POST['d_id'];
                        $d_name = $_POST['d_name'];
                        $d_alt = $_POST['d_alt'];
                        $d_image = $_FILES['d_image']['name'];
                        $d_image_temp=$_FILES['d_image']['tmp_name'];

                        if($d_image_temp != "")
                        {
                            $destfile = "./img/".$d_image;
                            move_uploaded_file($d_image_temp ,$destfile);
                            $d_update="update all_devices set d_name='$d_name', d_alt='$d_alt', d_image='$destfile' where d_id='".$_GET['d_id']."'";   
                        }else
                        {
                            $d_update="update all_devices set d_name='$d_name', d_alt='$d_alt' where d_id='".$_GET['d_id']."'";
                        }
                        
                        $run_update=mysqli_query($connection, $d_update);
                    }
                ?>
              </div>
              <div class="col-md-12 text-right pt-4">
                    <a href="view-devices.php" class="btn btn-primary btn-icon-split">
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