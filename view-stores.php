<?php
$currentPage = 'stores';
$currentPage2 = 'view-stores';

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
             <h1 class="h3 mb-4 text-gray-800">View Stores</h1>

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
                                  <th scope="col">Name</th>
                                  <th scope="col">Address</th>
                                  <th scope="col">Map</th>
                                  <th scope="col">Phone No</th>
                                  <th scope="col">Image </th>
                                  <th scope="col">Edit</th>
                                  <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Address</th>
                                  <th scope="col">Map</th>
                                  <th scope="col">Phone No</th>
                                  <th scope="col">Image </th>
                                  <th scope="col">Edit</th>
                                  <th scope="col">Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php
                                $sql=mysqli_query($connection,"SELECT * FROM stores");
                                while($row=mysqli_fetch_assoc($sql)){
                                  echo'
                                    <tr>
                                      <th scope="row">'.$row["s_id"].'</th>
                                      <td>'.$row["s_name"].'</td>
                                      <td>'.$row["s_address"].'</td>
                                      <td>'.$row["s_map"].'</td>
                                      <td>'.$row["s_phone"].'</td>
                                      <td><img class="img-fluid" src="'.$row['s_img'].'" width="60"></td>
                                      <td><a href="stores-edit.php?s_id='.$row['s_id'].'" class="btn btn-info btn-icon-split"><span class="icon text-white-50"> <i class="fas fa-pen"></i></a></td>                                 
                                      <td><a class="btn btn-danger btn-circle" href="stores-delete.php?s_id='.$row['s_id'].'"><i class="fas fa-trash"></i></a></td>
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