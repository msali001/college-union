
<?php
include('connect.php');
include('header.php');

$idd=$_GET['idd'];
$_SESSION['pidd']=$idd;
?>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>RESULT</span></h2>
          <div class="clr"></div>
			
			<?php 
		 $qry0="SELECT `event_id`,`event` FROM `events` WHERE program_id='$idd'";
		$exc0=mysqli_query($con,$qry0);
			
			
			?>
			 
			
	
          <form  method="post" id="sendemail" >
            
			  <table width="100%" class="blueTable" border="1">
           	     <?php  while($row0=mysqli_fetch_array($exc0)) { $event_id=$row0['event_id']; ?>
            	<tr bgcolor="#F9BC6F">
            		<td align="center" rowspan="4"><?php echo $row0['event']; ?></td>
					<td colspan="3" align="center">Rusult </td></tr>
            		<tr>
            		<td>First</td>
            		<td><?php $qry1="SELECT * FROM `results` a,`students` b WHERE  a.status='first' and a.event_id='$event_id' and a.student_id=b.student_id"; $exc1=mysqli_query($con,$qry1);$row1=mysqli_fetch_array($exc1);echo $row1['name']; ?></td>
						<td><?php $qry1="SELECT * FROM `results` a,`students` b WHERE   a.status='first' and a.event_id='$event_id' and a.student_id=b.student_id"; $exc1=mysqli_query($con,$qry1);$row1=mysqli_fetch_array($exc1);echo $row1['std_group']; ?></td><td align="center" rowspan="3"><a href="addresult.php?idd=<?php echo $row0['event_id'];?>">Add Result</a></td> </tr> 
				<tr><td>Second</td>
           			<td><?php $qry1="SELECT * FROM `results` a,`students` b WHERE   a.status='second' and a.event_id='$event_id' and a.student_id=b.student_id"; $exc1=mysqli_query($con,$qry1);$row1=mysqli_fetch_array($exc1);echo $row1['name']; ?></td>
            		<td><?php $qry1="SELECT * FROM `results` a,`students` b WHERE   a.status='second' and a.event_id='$event_id' and a.student_id=b.student_id"; $exc1=mysqli_query($con,$qry1);$row1=mysqli_fetch_array($exc1);echo $row1['std_group']; ?></td>  </tr>
			 <tr> <td>Third</td>
            		<td><?php $qry1="SELECT * FROM `results` a,`students` b WHERE   a.status='third' and a.event_id='$event_id' and a.student_id=b.student_id"; $exc1=mysqli_query($con,$qry1);$row1=mysqli_fetch_array($exc1);echo $row1['name']; ?></td>
						<td><?php $qry1="SELECT * FROM `results` a,`students` b WHERE   a.status='third' and a.event_id='$event_id' and a.student_id=b.student_id"; $exc1=mysqli_query($con,$qry1);$row1=mysqli_fetch_array($exc1);echo $row1['std_group']; ?></td>  </tr><?php } ?>
				</table></form>
         
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
