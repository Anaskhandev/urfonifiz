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
            <h1 class="h3 mb-4 text-gray-800">Edit Service</h1>
            <div class="row">
              <div class="col-md-6">
              <?php
                if(isset($_GET['st_id'])){
                    $sql = "select * from service_type where st_id = '".$_GET['st_id']."'";
                    $result = mysqli_query($connection, $sql);
                    
                    foreach($result as $row)
                    {
                ?>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="st_id" name="st_id" value="<?php echo $row['st_id']?>">
                        <div class="form-group">
                            <label for="">Service Title</label>
                            <input type="text" class="form-control" name="st_title" id="st_title" value="<?php echo $row['st_title']?>">
                        </div>
                        <div class="form-group">
                            <label>Service Image Alt</label>
                            <input type="text" class="form-control" name="st_image_alt" id="st_image_alt" value="<?php echo $row['st_image_alt']?>">
                        </div>
                        <div class="form-group">
                        <label for="st_image">Device Image</label>
                            <div class="custom-file">
                            <input type="file" name="st_image"  accept="image/*" value="<?php echo $row['st_image']?>" id="st_image">
                                <label class="custom-file-label" for="st_image">Choose file...</label>
                            </div>
                        </div>
                        <input type="submit" name="update" value="Update" class="btn btn-success px-5 py-2 rounded-pill">
                    </form>
                <?php
                        }
                    }

                    // update user by id functionality
                    if (isset($_POST['update'])) {
                        $st_id = $_POST['st_id'];
                        $st_title = $_POST['st_title'];
                        $st_image_alt = $_POST['st_image_alt'];
                        $st_image = $_FILES['st_image']['name'];
                        $st_image_temp=$_FILES['st_image']['tmp_name'];

                        if($st_image_temp != "")
                        {
                            $destfile = "./img/".$st_image;
                            move_uploaded_file($st_image_temp ,$destfile);
                            $st_update="update service_type set st_title='$st_title', st_image_alt='$st_image_alt', st_image='$destfile' where st_id='".$_GET['st_id']."'";   
                        }else
                        {
                            $st_update="update service_type set st_title='$st_title', st_image_alt='$st_image_alt' where st_id='".$_GET['st_id']."'";
                        }
                        
                        $run_update=mysqli_query($connection, $st_update);
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