<?php
$currentPage = 'orders';
$currentPage2 = 'view-orders';

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
            <h1 class="h3 mb-4 text-gray-800">View Orders</h1>

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
                                    <th scope="col">Date</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Order Amount</th>
                                    <th scope="col">Shipping Address</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">View</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Order Amount</th>
                                    <th scope="col">Shipping Address</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">View</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $sql=mysqli_query($connection,"SELECT * FROM `order_table` inner join admin_login on admin_login.id=order_table.mamber_id order by order_table.order_id desc");
                                $counter=1;
								while($row=mysqli_fetch_assoc($sql)){
                                  echo'
                                    <tr>
                                      <th scope="row">'.$counter.'</th>
                                      <td>'.$row["date"].'</td>
                                      <td>'.$row["name"].'</td>
                                      <td>'.$row["Email"].'</td>
                                      <td>'.$row["order_amount"].'</td>
                                      <td>'.$row["shipping_address"].'</td>
                                      <td>'.$row["payment_status"].'</td>
                                      <td>'.$row["order_status"].'</td>
                                      <td><a class="btn btn-info btn-circle" title="Edit Order Status" href="update_order_status.php?id='.$row['order_id'].'"><i class="fa fa-pencil"></i></a>
                                      </td>
                                      <td><a class="btn btn-info btn-circle" title="View Order Details" href="view-order.php?id='.$row['order_id'].'"><i class="fas fa-eye"></i></a></td>
                                    </tr>';
									$counter++;
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