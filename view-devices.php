<?php

$currentPage = 'devices';
$currentPage2 = 'view-device';

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
         <div class="container-fluid">
 
             <!-- Page Heading -->
             <h1 class="h3 mb-4 text-gray-800">View Devices</h1>

             <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Device Name</th>
                                    <th scope="col">Device Image</th>
                                    <th scope="col">Device Alt</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Device Name</th>
                                    <th scope="col">Device Image</th>
                                    <th scope="col">Device Alt</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php
                                $sql=mysqli_query($connection,"SELECT * FROM all_devices");
                                while($row=mysqli_fetch_assoc($sql)){
                                echo'
                                    <tr>
                                    <th scope="row">'.$row["d_id"].'</th>
                                    <td>'.$row["d_name"].'</td>
                                    <td><img class="img-fluid" src="'.$row['d_image'].'" width="60"></td>
                                    <td>'.$row["d_alt"].'</td>
                                    <td><a href="edit-devices.php?d_id='.$row['d_id'].'" class="btn btn-info btn-icon-split"><span class="icon text-white-50"> <i class="fas fa-pen"></i></a></td>                                 
                                    <td><a class="btn btn-danger btn-circle" href="delete-devices.php?d_id='.$row['d_id'].'"><i class="fas fa-trash"></i></a></td>
                                    </tr>';
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

         </div>
         <!-- /.container-fluid -->
     </div>
     <!-- End of Main Content -->


<?php
include('admin-footer.php');
?>