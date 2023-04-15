<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:admin-login.php');
}

$currentPage = 'service';
$currentPage2 = 'add-service';
include('./config.php');

if(isset($_POST['insert'])){
    $st_title=$_POST['st_title'];
    $st_image=$_FILES['st_image'];
    $st_image_alt=$_POST['st_image_alt'];
    
    $filename = $st_image['name'];
    $filepath = $st_image['tmp_name'];
    $fileerror= $st_image['error'];

    if($fileerror == 0)
    {
        $destfile = "./img/".$filename;
        move_uploaded_file($filepath ,$destfile);

        $sql= "INSERT INTO service_type (st_title,st_image,st_image_alt) VALUES ('$st_title','$destfile','$st_image_alt')";
        $result = mysqli_query($connection,$sql);
    }
}

include('admin-header.php');

?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Add Service Type</h1>
            <div class="row">
              <div class="col-md-6">
                <form action="add-service.php" method="POST" enctype="multipart/form-data">
  
                    <div class="form-group">
                        <label for="">Service Title</label>
                        <input type="text" class="form-control" name="st_title" id="st_title" placeholder="Service Title">
                    </div>
                    <div class="form-group">
                    <label for="st_image">Service Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="st_image" accept="image/*" id="st_image" required>
                            <label class="custom-file-label" for="st_image">Choose file...</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Service Image Alt</label>
                        <input type="text" class="form-control" id="st_image_alt" name="st_image_alt" placeholder="Service Alt Name">
                    </div>
                    <input type="submit" name="insert" class="btn btn-success px-5 py-2 rounded-pill">
                </form>
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

