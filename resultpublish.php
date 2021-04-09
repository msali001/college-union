
<?php
include('connect.php');
include('header.php');

$idd=$_SESSION['uid'];
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>APPLIED PROGRAMS</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table width="100%" class="blueTable" border="1">
            	<tr bgcolor="#99C3C5">
            		<td> <label for="name">Program Name</label></td>
            		<td> <label for="name">Conducted by</label></td>
            		<td> <label for="name">Date</label></td>
            		
            		<td> <label for="name">Time</label></td>
            		<td> <label for="name">Venue</label></td>
            		<td><label for="name">Guest</label></td>
            		<td> <label for="name">Result</label></td>
				</tr>
            
            <br>
           
          </form>
          <?php 
	
		$qry="SELECT * FROM `programs` where union_id='$idd' order by date desc";
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		$status=$row['status'];
		if($status=='Posted')
		{
			  ?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['conducted'];?></td>
			<td><?php echo $row['date'];?></td>
			<td><?php echo $row['time'];?></td>
			<td><?php echo $row['venue'];?></td>
			<td><?php echo $row['guest'];?></td>
			<td><?php $event=$row['events'];
		if($event=='yes')
		{
	?>
			<a href="result.php?idd=<?php echo $row['program_id'];?>">Add</a>

		<?php }else echo "No Events"; ?></td></tr>			
		<?php }} ?>	
		</table>
        </div>
      </div>
        <?php
		include('slidebarunion.php');
		?>
      </div>
      <div class="clr"></div>
    
  </div>
<?php
		include('footer.php');
		?>
</body>
</html>
