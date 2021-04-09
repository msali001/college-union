<?php
include('connect.php');
?>


 <?php
		$idd=$_GET['idd'];
        $status=$_GET['value'];
				if($status=='accept'){	
				$qry="UPDATE `programs` SET `status`='Granded' WHERE program_id='$idd'";
				$exe=mysqli_query($con,$qry);
				}
if($status=='reject'){	
				$qry="UPDATE `programs` SET `status`='Rejected' WHERE program_id='$idd'";
				$exe=mysqli_query($con,$qry);
				}
				if($exe)
		{
			?>
			<script>
	alert("success");
	window.location.assign("program_approval.php");
	</script>
			<?php
		}
		else
			{
			?>
			<script>
	alert("faild");
	
	</script>
			<?php
		}
		
	
	
	?>
				