<?php 
error_reporting(0);
require('bankconfig.php');
include("database.php");
$obj=new database();

session_start();
	$date=date("d-M-Y");
	$amount=$_POST["amount"];	
	$customer_name=$_POST["customer_name"];	
	$customer_address=$_POST["customer_address"];	
	$customer_city=$_POST["customer_city"];	
	$customer_state=$_POST["customer_state"];	
	$customer_pin=$_POST["customer_pin"];	
	$customer_country=$_POST["customer_country"];		
	$token=$_POST["stripeToken"];
	$userID=$_POST["mamberId"];

if(isset($_POST["stripeToken"]))
{
	
	
	
	

	\Stripe\Stripe::setVerifySslCerts(false);

	$data=\Stripe\Charge::create(array(
		"amount"=>$amount,
		"currency"=>"usd",
		"description"=>"getway on mobile Hospital",
		"source"=>$token,
		));
	//outcome=>seller_message=>
	if(!empty($data))
	{
	
		$query1=mysqli_query($obj->con(),"INSERT INTO `order_table`(`order_id`, `mamber_id`, `order_amount`, `shipping_address`, `card_holder_name`, `city`, `state`, `zipcode`, `country`, `payment_status`, `order_status`,`date`) VALUES (null,'$userID','$amount','$customer_address','$customer_name','$customer_city','$customer_state','$customer_pin','$customer_country','Paid','Pending','$date')");	
		if($query1==1)
		{
		$userEmail=mysqli_query($obj->con(),"SELECT * FROM `admin_login` where id='$userID'");
		while($rows=mysqli_fetch_array($userEmail))
		{
			
				$to      = 'baqir.redecom@gmail.com';
				$subject = 'the subject';
				$message = 'hello';
				$headers = array(
					'From' => 'baqir.redecom@gmail.com',
					'Reply-To' => 'baqir.redecom@gmail.com',
					'X-Mailer' => 'PHP/' . phpversion()
				);
				mail($to, $subject, $message, $headers);

		}
		
		
		
		
		$querys=mysqli_query($obj->con(),"SELECT * FROM `order_table` order by order_id desc limit 1");
		while($r=mysqli_fetch_array($querys))
		{
			$order_id=$r['order_id'];
		}
		
		
		
		$query=mysqli_query($obj->con(),"SELECT * FROM `tbl_cart` where member_id='$userID'");
		while($row=mysqli_fetch_array($query))
		{
			
			$product_id=$row['product_id'];
			$quantity=$row['quantity'];
			$member_id=$row['member_id'];
			
			$q=mysqli_query($obj->con(),"INSERT INTO `order_item`(`order_item_id`,`order_id`, `member_id`, `order_item_quantity`, `prodect_id`) VALUES (null,'$order_id','$member_id','$quantity','$product_id')");
			if($q==1)
			{
			mysqli_query($obj->con(),"DELETE FROM `tbl_cart` WHERE `product_id`='$product_id' and `member_id`='$member_id'");	
			}
		}
	}
	
		
		
		echo"
			<script>alert('Your Card Charge Successfully')</script>
			<script>window.location.href='index.php'</script>
			";		
	}
	else{
		echo"
			<script>alert('Something Went wrong Please Check Your Account Balance')</script>
			<script>window.location.href='order_process.php'</script>
			";
	}
}
else{
	header("location:order_process.php");
}
?>
	


