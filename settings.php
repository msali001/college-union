
<?php
include('connect.php');
include('header.php');

?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>Settings</span></h2>
          <div class="clr"></div>
          <form  method="post" onsubmit="return confirm('Are you sure?');">
            <table width="100%" class="blueTable" border="1" >
            	<tr bgcolor="#1BE79E">
            		<ol><li><input type="submit" name="delete" value="Delete Graguated Students"</li>
           		        
           		        </ol>
            	</table>	        
          </form>
			  <?php
			if(isset($_POST['delete']))
			{
				$qry="DELETE  FROM `students` WHERE year='3rd Year'";
				$exe=mysqli_query($con,$qry);
				if($exe)
				{
				$qry2="UPDATE `students`  SET `year`='3rd Year' WHERE `year`='2nd Year' " ;
				$exe2=mysqli_query($con,$qry2);
				}
				if($exe2)
				{
				$qry3="UPDATE `students` SET `year`='2nd Year' WHERE `year`='1st Year' " ;
				$exe3=mysqli_query($con,$qry3);
				}
				$qry4="TRUNCATE TABLE `notifications` ";
				$exe4=mysqli_query($con,$qry4);
				if($exe3 && $exe4)
					
		{
			?>
			<script>
	alert("success");
	window.location.assign("admin_home.php");
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
			}
		
	?>

        </div>
      </div>
      
        <?php
		include('slidebar.php');
		?>
      </div>
      <div class="clr"></div>
    
  </div>
<?php
		include('footer.php');
		?>
</body>
</html>
