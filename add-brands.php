<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:admin-login.php');
};

$currentPage = 'brands';
$currentPage2 = 'add-brand';
include('./config.php');

if(isset($_POST['insert'])){
    $br_name=$_POST['br_name'];
    $br_alt=$_POST['br_alt'];
    $br_image=$_FILES['br_image'];
    
    $filename = $br_image['name'];
    $filepath = $br_image['tmp_name'];
    $fileerror= $br_image['error'];

    if($fileerror == 0)
    {
        $destfile = "./img/".$filename;
        move_uploaded_file($filepath ,$destfile);

        $sql= "INSERT INTO all_brands (br_name,br_image,br_alt) VALUES ('$br_name','$destfile','$br_alt')";
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
            <h1 class="h3 mb-4 text-gray-800">Add brands</h1>
            <div class="row">
              <div class="col-md-6">
                <form action="add-brands.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">brand Name</label>
                        <input type="text" class="form-control" name="br_name" placeholder="brand Name">
                    </div>
                    <div class="form-group">
                        <label>brand Alt</label>
                        <input type="text" class="form-control" id="" name="br_alt" placeholder="brand Alt Name">
                    </div>
                    <div class="form-group">
                    <label for="brandImage">brand Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="br_image"  accept="image/*" id="brandImage" required>
                            <label class="custom-file-label" for="brandImage">Choose file...</label>
                        </div>
                    </div>
                    <input type="submit" name="insert" class="btn btn-success px-5 py-2 rounded-pill">
                </form>
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

