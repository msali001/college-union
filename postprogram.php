<?php
include('connect.php');
$idd=$_GET['idd'];
?>
<?php 

				$qry="UPDATE `programs` SET `status`='Posted' WHERE program_id='$idd'";
				$exe=mysqli_query($con,$qry);

				if($exe)
					
		{
			?>
			<script>
	alert("success");
	window.location.assign("programs_approved.php");
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