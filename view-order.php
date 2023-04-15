<?php
$p_id=$_GET['id'];

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
                           
                           
                            <tbody>
                            <?php
                                $sqld=mysqli_query($connection,"SELECT * FROM `order_item` inner join all_products on all_products.pr_id=order_item.prodect_id WHERE order_item.order_id='$p_id'");
                                $sql=mysqli_query($connection,"SELECT * FROM `order_table` inner join admin_login on admin_login.id=order_table.mamber_id where order_table.order_id='$p_id'");
                                $counter=1;
								while($row=mysqli_fetch_assoc($sql)){
                                  echo'
								  
									<tr>
									<th scope="col">#</th>
                                      <td scope="row">'.$counter.'</td>
									</tr>
									<tr>
										<th scope="col">Date</th>
										<td>'.$row["date"].'</td>
									</tr>
									<tr>
									<th scope="col">Name</th>
                                      <td>'.$row["name"].'</td>
									</tr>
									<tr>
									<th scope="col">Email</th>
                                      <td>'.$row["Email"].'</td>
									</tr>
									<tr>
									<th scope="col">Order Amount</th>
                                      <td>'.$row["order_amount"].'</td>
									</tr>
									<tr>
									<th scope="col">Shipping Address</th>
                                      <td>'.$row["shipping_address"].'</td>
									</tr>
									<tr>
									<th scope="col">City</th>
                                      <td>'.$row["city"].'</td>
									</tr>
									<tr>
									<th scope="col">State</th>
                                      <td>'.$row["state"].'</td>
									</tr>
									<tr>
									<th scope="col">Zipcode</th>
                                      <td>'.$row["zipcode"].'</td>
									</tr>
									<tr>
									 <th scope="col">Payment Status</th>
                                      <td>'.$row["payment_status"].'</td>
									</tr>
									<tr>
									 <th scope="col">Order Products</th>
									 <td>
									';
									?>
									<?php
									while($rows=mysqli_fetch_array($sqld))
									{
										 $pro=$rows['pr_name'];
										 echo $pro.',';
									}
									?>
									
									<?php
									echo'
									</td>
									</tr>
									<tr>
									
									
									<th scope="col">Order Status</th>
                                      <td>'.$row["order_status"].'</td>
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