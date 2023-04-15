<?php 

session_start();
if(!isset($_SESSION['user'])){
    header('location:admin-login.php');
};

$currentPage = 'stores';
$currentPage2 = 'add-stores';

include('./config.php');
if(isset($_POST['insert'])){
    $s_name=$_POST['s_name'];
    $s_address=$_POST['s_address'];
    $s_map=$_POST['s_map'];
    $s_phone=$_POST['s_phone'];
    $s_img=$_FILES['s_img'];
   
  
    $filename = $s_img['name'];
    $filepath = $s_img['tmp_name'];
    $fileerror= $s_img['error'];

if($fileerror == 0)
{
    $destfile = "./img/".$filename;
    move_uploaded_file($filepath ,$destfile);

    $sql= "INSERT INTO stores (s_name,s_address,s_map,s_phone,s_img) VALUES ('$s_name','$s_address','$s_map','$s_phone','$destfile')";
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
            <h1 class="h3 mb-4 text-gray-800">Add Stores</h1>
            <div class="row">
                <div class="col-md-8">
                    <form action="stores.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="s_name" placeholder="Name">
                            </div>
                            <div class="form-group col-6">
                                <label>Phone</label>
                                <input type="tel" class="form-control" id="s_phone" name="s_phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label>Address</label>
                                <input type="text" class="form-control" id="s_address" name="s_address" placeholder=" Address">
                            </div>
                            <div class="form-group col-6">
                            <label for="deviceImage">Store Image</label>
                                <div class="custom-file">
                                <input type="file" name="s_img" class="custom-file-input" id="customFile" accept="image/*">
                                    <label class="custom-file-label" for="deviceImage">Choose file ...</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Map</label>
                            <textarea type="text" rows="4" class="form-control" id="s_map" name="s_map" placeholder="Map Location"></textarea>
                        </div>
                        <input type="submit" name="insert" class="btn btn-success mt-3 px-5 py-2 rounded-pill">
                    </form>
                </div>
            </div>
            <div class="col-md-12 text-right pt-4">
                <a href="view-stores.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-eye"></i>
                    </span>
                    <span class="text">View</span>
                </a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

<?php
    include('admin-footer.php');
?>
