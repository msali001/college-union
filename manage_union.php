
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
          <h2><span>Manage Union</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table  width="100%" class="blueTable" border="1">
            	<tr bgcolor="#99C3C5">
            		<td> <label for="name">Name of Union</label></td>
            		
            		<td> <label for="name">Year</label></td>
            		
            		<td> <label for="name">Union Adviser</label></td>
            		<td><label for="name">Manage</label></td>
				</tr>
            
            <br>
           
          </form>
           <?php 
	
		$qry="SELECT union_id,u_name,year,adviser FROM `union` order by `year` desc" ;
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['u_name'];?></td>
			<td><?php echo $row['year'];?></td>
			<td><?php echo $row['adviser'];?></td>
			<td><a href="update_union_reg.php?idd=<?php echo $row['union_id'];?>">View</a></td>
			
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
