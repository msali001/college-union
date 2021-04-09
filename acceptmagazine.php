<?php
include('connect.php');
?>


 <?php
		$idd=$_GET['idd'];
		$status=$_GET['value'];
             
			if($status=='accept'){		
				$qry="UPDATE `magazine` SET `status`='Granded' WHERE Magazine_id='$idd'";
				$exe=mysqli_query($con,$qry);
			}
if($status=='reject'){
	$qry="UPDATE `magazine` SET `status`='Rejected' WHERE Magazine_id='$idd'";
				$exe=mysqli_query($con,$qry);
}
				if($exe)
		{
			?>
			<script>
	alert("success");
	window.location.assign("approval_magazine.php");
	</script>
			<?php
		}
		else
			{
			?>
			<script>
	alert("faild");
	//window.location.assign("add_news.php");
	</script>
			<?php
		}
		
	
	
	?>
				