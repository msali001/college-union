
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
          <h2><span>Approval for Magazine</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table width="100%" class="blueTable" border="1">
            	<tr bgcolor="#53B1CD">
            		<td>Magazine Name</td>
            		<td>Union</td>
            		<td>Year</td>
					<td>Status</td>
           		
            		
            	</tr>
          </form>
           <?php 
	
		$qry="SELECT * FROM `magazine` a,`union` b where a.union_id=b.union_id order by b.year desc"  ;
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['m_name'];?></td>
			<td><?php echo $row['u_name'];?></td>
			<td><?php echo $row['year'];?></td>
			<td><?php echo $row['status'];?></td>
			

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

