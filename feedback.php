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
          <h2><span>Feedback</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table width="100%" class="blueTable" border="1">
            	<tr bgcolor="#1BE79E">
					
            		<td>feedback</td>
            		<td>Student name</td>
            		<td>Department</td>
            		<td>Register</td>
					<td>Union</td>
					
            	</tr>
           
          </form>
           <?php 
	
		$qry="SELECT * FROM `feedbacks` a,`students` b,`union` c where a.std_id=b.student_id and a.union_id=c.union_id order by c.year desc, feedback_id desc"  ;
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['feedback'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['department'];?></td>
				<td><?php echo $row['register'];?></td>
			<td><?php echo $row['u_name'];?></td>
		</tr>
		<?php
	}
			  ?></table><?php
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
