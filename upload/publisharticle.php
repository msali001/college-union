<?php
include('connect.php');
?>


 <?php
		$idd=$_GET['idd'];
	
             
					
				$qry="UPDATE `article` SET `status`='Published' WHERE article_id='$idd'";
				$exe=mysqli_query($con,$qry);
			

				if($exe)
		{
			?>
			<script>
	alert("success");
	window.location.assign("article.php");
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
				