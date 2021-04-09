<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include('connect.php');
include('header.php');
?>
  <style>
	  table{
		  table-layout: fixed;
		 
		
	  }
	  td
	  {
		word-wrap: break-word
	  }
</style>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>Complaints</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail" >
            <table width="100%" class="blueTable" border="1">
            	<tr bgcolor="#1BE79E">
            		<td>complaints</td>
            		<td>Student name</td>
            		<td>Department</td>
            		<td>Register</td>
            		<td>Union</td>
            		<td>Reply</td>          
          </form>
           <?php 
	
		$qry="SELECT * FROM `complaint` a,`students` b,`union` c where a.std_id=b.student_id and a.union_id=c.union_id order by c.year desc" ;
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['complaint'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['department'];?></td>
			<td><?php echo $row['register'];?></td>
			<td><?php echo $row['u_name'];?></td>
			<td><?php echo $row['reply'];?></td>
			<td><a href="reply.php?idd=<?php echo $row['complaint_id'];?>">Give Reply</a></td>				


		</tr>
		<?php
	}
			  ?></table><?php
		?>
        </div>
      </div>  <?php
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
