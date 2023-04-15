<?php
$p_id=$_GET["id"];

 include('./config.php');
$query=mysqli_query($connection,"SELECT * FROM `order_table` WHERE `order_id`='$p_id'");
while($row=mysqli_fetch_array($query))
{
	$order_status=$row['order_status'];
}
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
            <h1 class="h3 mb-4 text-gray-800">Update Order Status</h1>
            <div class="row">
              <div class="col-md-6">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Status</label>
						<select class="form-control" name="status">
							<option value="<?php echo $order_status;?>"><?php echo $order_status;?></option>
							<option value="Delivered">Delivered</option>
							<option value="Pending">Pending</option>
							<option value="Process">Process</option>
						</select>
                    </div>
                    <input type="submit" name="insert" class="btn btn-success px-5 py-2 rounded-pill" value="Update">
                </form>
				<?php
				if(isset($_POST["insert"]))
				{
					$status=$_POST["status"];
					$q=mysqli_query($connection,"UPDATE `order_table` SET `order_status`='$status' WHERE `order_id`='$p_id'");
					if($q==1)
					{
						echo"
						<script>window.location.href='order.php'</script>
						";
					}
				}
				
				?>
              </div>
              
          </div>
        </div>
        <!-- /.container-fluid -->
    </div>
     <!-- End of Main Content -->

<?php
include('admin-footer.php');
?>