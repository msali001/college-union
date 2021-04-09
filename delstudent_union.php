<?php
include('connect.php');
$idd=$_GET['idd'];
?>
<?php 

				$qry="DELETE  FROM `students` WHERE student_id='$idd'";
				$exe=mysqli_query($con,$qry);

				if($exe)
					
		{
			?>
			<script>
	alert("success");
	window.location.assign("viewstudents_union.php");
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