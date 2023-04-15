<?php
$randnum=rand();
session_start();
if(!isset($_SESSION['user'])){
    header('location:admin-login.php');
};

$currentPage = 'products';
$currentPage2 = 'add-product';
include('./config.php');

if(isset($_POST['insert'])){
    $pr_name=$_POST['pr_name'];
    $pr_price=$_POST['pr_price'];
    $pr_description=$_POST['pr_description'];
    $pr_specification=$_POST['pr_specification'];
    $pr_image=$_FILES['pr_image'];
    $br_id=$_POST['br_id'];
    
    $filename = $pr_image['name'];
    $filepath = $pr_image['tmp_name'];
    $fileerror= $pr_image['error'];

    if($fileerror == 0)
    {
        $destfile = "./img/".$filename;
        move_uploaded_file($filepath ,$destfile);

        $sql= "INSERT INTO all_products (pr_name,pr_price,pr_description,pr_specification,pr_images,br_id,code) VALUES ('$pr_name','$pr_price','$pr_description','$pr_specification','$destfile','$br_id','$randnum')";
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
            <h1 class="h3 mb-4 text-gray-800">Add products</h1>
            <div class="row">
              <div class="col-md-6">
                <form action="add-products.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">product Name</label>
                        <input type="text" class="form-control" name="pr_name" placeholder="product Name">
                    </div>
                    <div class="form-group">
                        <label>product price</label>
                        <input type="text" class="form-control" id="" name="pr_price" placeholder="product price">
                    </div>
                    <div class="form-group">
                        <label>product description</label>
                        <input type="text" class="form-control" id="" name="pr_description" placeholder="product description">
                    </div>
                    <div class="form-group">
                        <label>product specification</label>
                        <input type="text" class="form-control" id="" name="pr_specification" placeholder="product specification">
                    </div>
                    
                    <div class="form-group">
                        <label>Brands</label>
                        <select id="br_id" name="br_id" class="form-control">
                                <?php 
                                $fetch_brands= mysqli_query($connection,"Select * from all_brands");
                                while($row= mysqli_fetch_array($fetch_brands))
                                {
                                    echo'
                                    <option value="'.$row['br_id'].'">'.$row['br_name'].'</option>
                                    ';    
                                }
                            ?>
                            </select>
                    </div>
                    <div class="form-group">
                    <label for="productImage">product Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="pr_image"  accept="image/*" id="productImage" required>
                            <label class="custom-file-label" for="productImage">Choose file...</label>
                        </div>
                    </div>
                    <input type="submit" name="insert" class="btn btn-success px-5 py-2 rounded-pill">
                </form>
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

