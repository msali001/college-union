
<?php 
 include('connect.php');
$pidd=$_GET['idd'];
include('header.php')
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article" id="exportContent">
          <h2><span>Approval for Participants</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            
            	

         <table width="100%">
          <?php 
	
		$qry1="SELECT * FROM events where program_id='$pidd'" ;
				
						$exc1=mysqli_query($con,$qry1);

			 
			 		 ?><tr><?php
$count=0;
				while($row2=mysqli_fetch_array($exc1))
	{
		
		 
			 $event=$row2['event_id'];
			 
		 $qry="SELECT * FROM events a,program_applyer b ,students c where b.event_id=a.event_id and b.student_id=c.student_id and b.event_id=$event " ;
			  $exc=mysqli_query($con,$qry);
		if($count==4){ ?></tr><tr><?php }
		?>
		  <td  colspan="2" valign="top"><ol><li style="font-size: 16px & background-color: aqua" style="background-color: aqua"><b><?php echo $row2['event'];?><hr></b></li><?php
			  while($row=mysqli_fetch_array($exc))
				  
	{
		?>
		 
		
		  
				
			  <li><?php echo $row['name']."  --- ";  echo $row['department'];?></li>
				
			
			
		<?php
	}
				?></ol></td><?php
	if($count==4){$count=-1;} $count++;
				}
				?></tr><?php
				
				?>            	
</table>
        </form>
        </div>
        <table width="100%"><tr><td colspan="75%" align="right"><input type="button" onclick="Export2Doc('exportContent');" value="Print"></button></td>

            	<td colspan="25%" align="center">
            		<a href="add_evt.php?idd=<?php echo $_SESSION['pid']=$pidd;?>">Add more Events</a>
            	</td></tr></table>
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
