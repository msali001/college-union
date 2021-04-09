<?php
include('connect.php');
include('header.php');

?>
 <style>
	table{
	color: black;
		font-size: 13px;
	}</style>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>Student Details</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table width="100%">
            
            	<tr bgcolor="#E99440">
            		<td>Register Number</td>
            		<td>Name</td>
            		<td>Department</td>
            		<td>Year</td>
					<td>Gender</td>
            		<td>Date of Birth</td>
            		<td>E-mail</td>
            		
            		<td bgcolor="#14B568">Manage</td>
            	</tr>
            
                   <?php 
	
		$qry="SELECT * FROM `students` order by year,department,gender desc,name";
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['register'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['department'];?></td>
			<td><?php echo $row['year'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['email'];?></td>
			
			<td><a href="delstudent.php?idd=<?php echo $row['student_id'];?>">Delete</a></td>			
		</tr>
		<?php
	}
			  ?></table><?php
		?>
          </form>
   
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
