
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
          <h2><span>Approve Program</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table class="blueTable" width="100%" border="2">
            	<tr bgcolor="#99C3C5">
            		<td> <label for="name">Program Name</label></td>
            		<td> <label for="name">Conducted by</label></td>
            		<td> <label for="name">Date</label></td>
            		
            		<td> <label for="name">Time</label></td>
            		<td> <label for="name">Venue</label></td>
            		<td><label for="name">Guest</label></td>
            		<td> <label for="name">Status</label></td>
				</tr>
            
            <br>
           
          </form>
          <?php 
	
		$qry="SELECT * FROM `programs` order by date";
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['conducted'];?></td>
			<td><?php echo $row['date'];?></td>
			<td><?php echo $row['time'];?></td>
			<td><?php echo $row['venue'];?></td>
			<td><?php echo $row['guest'];?></td>
			<td><?php echo $st=$row['status'];?></td>
			<?php
			if($st=='Pending') 
			{ ?>
			<td><a href="acceptprogram.php?idd=<?php echo $row['program_id'];?>&amp;value=accept">Accept</a></td>
			<td><a href="acceptprogram.php?idd=<?php echo $row['program_id'];?>&amp;value=reject">Reject</a></td>			
		</tr>
		<?php
	}
			  }
			  ?></table>
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
