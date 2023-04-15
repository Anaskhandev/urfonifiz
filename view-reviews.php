<?php
$currentPage = 'reviews';
$currentPage2 = 'view-reviews';

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
             <h1 class="h3 mb-4 text-gray-800">View Reviews</h1>

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
                                  <th scope="col">Device</th>
                                  <th scope="col">City</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Message</th>
                                  <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Device</th>
                                  <th scope="col">City</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Message</th>
                                  <th scope="col">Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php
                                $sql=mysqli_query($connection,"SELECT * FROM feedback");
                                while($row=mysqli_fetch_assoc($sql)){
                                  echo'
                                    <tr>
                                      <th scope="row">'.$row["f_id"].'</th>
                                      <td>'.$row["f_name"].'</td>
                                      <td>'.$row["f_device"].'</td>
                                      <td>'.$row["f_city"].'</td>
                                      <td>'.$row["f_date"].'</td>
                                      <td>'.$row["f_message"].'</td>
                                      <td><a class="btn btn-danger btn-circle" href="delete-review.php?f_id='.$row['f_id'].'"><i class="fas fa-trash"></i></a></td>
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