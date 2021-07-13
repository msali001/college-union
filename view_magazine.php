
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
          <h2><span>View Magazine</span></h2>
          <div class="clr"></div>
         
            <table width="100%" >
            	<tr bgcolor="#CEEC7F">
					
            		<td>Union Name</td>
            		<td>Magazine name</td>
            		<td>Editor</td>
            		<td>Year</td>
					
            	</tr>
           
          
           <?php 
	
		$qry="SELECT m_name, file,u_name,year,editor,status FROM `magazine` a, `union` b WHERE a.union_id = b.union_id AND status = 'Granded'"  ;
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['u_name'];?></td>
			<td><?php echo $row['m_name'];?></td>
			<td><?php echo $row['editor'];?></td>
      <td><?php echo $row['year'];?></td>
      <td><a href="upload/<?php echo $row['file'] ?>"download><font color="#24840D">Download</font></a></td>
			  </tr>
      <?php }
        ?>

     </td></tr>
		</table>
        </div>
      </div>
        <?php
		include('slidebarstudent.php');
		?>
      </div>
      <div class="clr"></div>
    
  </div>
<?php
		include('footer.php');
		?>
</body>
</html>
