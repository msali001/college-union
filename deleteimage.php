<?php
include('connect.php');
$idd=$_GET['idd'];
?>
<?php 

				$qry="DELETE  FROM `gallery` WHERE gallery_id='$idd'";
				$exe=mysqli_query($con,$qry);

				if($exe)
					
		{
			?>
			<script>
	alert("success");
	window.location.assign("gallery_items.php");
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