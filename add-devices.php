<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:admin-login.php');
};

$currentPage = 'devices';
$currentPage2 = 'add-device';
include('./config.php');

if(isset($_POST['insert'])){
    $d_name=$_POST['d_name'];
    $d_alt=$_POST['d_alt'];
    $d_image=$_FILES['d_image'];
    
    $filename = $d_image['name'];
    $filepath = $d_image['tmp_name'];
    $fileerror= $d_image['error'];

    if($fileerror == 0)
    {
        $destfile = "./img/".$filename;
        move_uploaded_file($filepath ,$destfile);

        $sql= "INSERT INTO all_devices (d_name,d_image,d_alt) VALUES ('$d_name','$destfile','$d_alt')";
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
            <h1 class="h3 mb-4 text-gray-800">Add Devices</h1>
            <div class="row">
              <div class="col-md-6">
                <form action="add-devices.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Device Name</label>
                        <input type="text" class="form-control" name="d_name" placeholder="Device Name">
                    </div>
                    <div class="form-group">
                        <label>Device Alt</label>
                        <input type="text" class="form-control" id="" name="d_alt" placeholder="Device Alt Name">
                    </div>
                    <div class="form-group">
                    <label for="deviceImage">Device Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="d_image"  accept="image/*" id="deviceImage" required>
                            <label class="custom-file-label" for="deviceImage">Choose file...</label>
                        </div>
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

