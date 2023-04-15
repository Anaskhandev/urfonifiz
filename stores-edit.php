<?php
include('./config.php');

session_start();
if (!isset($_SESSION['user'])) {
    header('location:admin-login.php');
}

include('admin-header.php');
?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid py-4">
            <!-- Page Heading -->
            <div class="d-flex align-items-center justify-content-between pt-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Store</h1>
                <a href="view-stores.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-eye"></i>
                    </span>
                    <span class="text">View Stores</span>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <?php

                    if (isset($_GET['s_id'])) {
                        $sql = "select * from stores where s_id = '" . $_GET['s_id'] . "'";
                        $result = mysqli_query($connection, $sql);

                        foreach ($result as $row) {
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="s_id" name="s_id" value="<?php echo $row['s_id'] ?>">
                        <div class="form-group">
                            <label for="">Store Name</label>
                            <input type="text" class="form-control" name="s_name" id="s_name"
                                value="<?php echo $row['s_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Store Address</label>
                            <input type="text" class="form-control" name="s_address" id="s_address"
                                value="<?php echo $row['s_address'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Store Map</label>
                            <input type="text" class="form-control" name="s_map" id="s_map"
                                value="<?php echo $row['s_map'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Store Number</label>
                            <input type="text" class="form-control" name="s_phone" id="s_phone"
                                value="<?php echo $row['s_phone'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="s_img">Store Image</label>
                            <div class="custom-file">
                                <input type="file" name="s_img" accept="image/*" value="<?php echo $row['s_img'] ?>"
                                    id="s_img">
                                <label class="custom-file-label" for="s_img">Choose file...</label>
                            </div>
                        </div>

                        <input type="submit" name="update" value="Update"
                            class="btn btn-success px-5 py-2 rounded-pill">
                    </form>
                    <?php
                        }
                    }
                    if (isset($_POST['update'])) {
                        $s_id = $_POST['s_id'];
                        $s_name = $_POST['s_name'];
                        $s_address = $_POST['s_address'];
                        $s_map = $_POST['s_map'];
                        $s_phone = $_POST['s_phone'];
                        $s_img = $_FILES['s_img']['name'];
                        $s_image_temp = $_FILES['s_img']['tmp_name'];

                        if ($s_image_temp != "") {
                            $destfile = "./img/" . $s_img;
                            move_uploaded_file($s_image_temp, $destfile);
                            $s_update = "update stores set s_name='$s_name',s_address='$s_address',s_map='$s_map',s_phone='$s_phone',s_img='$destfile' where s_id='" . $_GET['s_id'] . "'";
                        } else {
                            $s_update = "update stores set s_name='$s_name',s_address='$s_address',s_map='$s_map',s_phone='$s_phone' where s_id='" . $_GET['s_id'] . "'";
                        }
                        $run_update = mysqli_query($connection, $s_update);
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