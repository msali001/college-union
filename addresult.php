<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include( 'connect.php' );
$idd=$_GET['idd'];
$idd2=$_SESSION['pidd'];
include( 'header.php' );
?>
		<div class="content">
			<div class="content_resize">
				<div class="mainbar">
					<div class="article">

						<div class="clr"></div>

					</div>
					<div class="article">
						<h2><span>ADD RESULT</span></h2>
						<div class="clr"></div>


						<?php 
			
		 $qry0="SELECT `event` FROM `events` WHERE event_id='$idd'";
		$exc0=mysqli_query($con,$qry0);
			$row0=mysqli_fetch_array($exc0);
			
		$qry1="select * from groups";
						$qry11="select * from groups where group_id='1'" ;
						$qry12="select * from groups where group_id='2'" ;
						$qry13="select * from groups where group_id='3'" ;
						$qry14="select * from groups where group_id='4'" ;
			
			
				$flag=0; 
				$flag2=0;
				$flag3=0;
			$fid="";
			$fgid="";
			$sid="";
			$sgid="";
			$tid="";
			$tgid="";
				$qry00="SELECT * FROM `results`";
				$exe00=mysqli_query($con,$qry00);
				while($row00=mysqli_fetch_array($exe00))
					  {
						  if($row00['event_id']==$idd && $row00['status']=='first'){
							  $flag=1;
							  $fid=$row00['student_id'];
							  $fgid=$row00['std_group'];
						  }
						   if($row00['event_id']==$idd && $row00['status']=='second'){
							  $flag2=1;
							   $sid=$row00['student_id'];
							    $sgid=$row00['std_group'];
							
						  }
						  if($row00['event_id']==$idd && $row00['status']=='third'){
							  $flag3=1;
							  $tid=$row00['student_id'];
							   $tgid=$row00['std_group'];
						  }
					  }
			?>
						<form method="post" id="sendemail">
							<table width="100%" class="blueTable" border="">
								<tr>
									<td rowspan="2">Group Names</td>
									<td align="center"><input type="text" name="group1" <?php $exc22=mysqli_query($con,$qry11); while($row22=mysqli_fetch_array($exc22)){ ?>
									value="<?php echo $row22['groupname'];} ?>"  placeholder="Group 1">
									</td>
									<td align="center"><input type="text" name="group2" placeholder="Group 2" <?php $exc22=mysqli_query($con,$qry12); while($row22=mysqli_fetch_array($exc22)){ ?>
									value="<?php echo $row22['groupname'];} ?>">
									</td>
									<td rowspan="2"><input type="submit" name="add" value="Add to List"
									</td>
								</tr>
								<tr>
									<td align="center"><input type="text" name="group3" placeholder="Group 3" <?php $exc22=mysqli_query($con,$qry13); while($row22=mysqli_fetch_array($exc22)){ ?>
									value="<?php echo $row22['groupname'];} ?>">
									</td>
									<td align="center"><input type="text" name="group4" placeholder="Group 4" <?php $exc22=mysqli_query($con,$qry14); while($row22=mysqli_fetch_array($exc22)){ ?>
									value="<?php echo $row22['groupname'];} ?>">
									</td>
								</tr>
							</table><br><br>

							<table width="100%" class="blueTable" border="1">
								<tr bgcolor="#AAAAAA">
									<td align="center" rowspan="4">
										<?php echo $row0['event']; ?>
									</td>
									<td colspan="4" align="center">Enter Result </td>
								</tr>
								<tr>
									<td>First</td>
									<td><input type="text" name="fname" placeholder="Student ID" value="<?php echo $fid ?>">
									</td>
									<td>
										<select name="Group1"><option value="<?php echo $fgid; ?>"><?php echo $fgid; ?></option>
											<?php  $exc1=mysqli_query($con,$qry1); while($row1=mysqli_fetch_array($exc1)) { ?>
											<option value="<?php echo $row1['groupname']; ?>">
												<?php echo $row1['groupname']; } ?>
											</option>
										</select>
									</td>
									<td rowspan="3" align="center"><input type="submit" name="ok" value="Add Result">
									</td>
								</tr>
								<tr>
									<td>Second</td>
									<td><input type="text" name="sname" placeholder="Student ID" value="<?php echo $sid ?>">
									</td>
									<td>
										<select name="Group2"><option value="<?php echo $sgid; ?>"><?php echo $sgid; ?></option>
											<?php $exc2=mysqli_query($con,$qry1); while($row2=mysqli_fetch_array($exc2)) { ?>
											<option value="<?php echo $row2['groupname']; ?>">
												<?php echo $row2['groupname']; } ?>
											</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Third</td>
									<td><input type="text" name="tname" placeholder="Student ID" value="<?php echo $tid ?>">
									</td>
									<td>
										<select name="Group3"><option value="<?php echo $tgid; ?>"><?php echo $tgid; ?></option>
											<?php $exc3=mysqli_query($con,$qry1); while($row3=mysqli_fetch_array($exc3)) { ?>
											<option value="<?php echo $row3['groupname']; ?>">
												<?php echo $row3['groupname']; } ?>
											</option>
										</select>
									</td>
								</tr>

							</table>
						</form>
						<?php 
						if(isset($_POST['add']))
						{
							$g1=$_POST['group1'];
							$g2=$_POST['group2'];
							$g3=$_POST['group3'];
							$g4=$_POST['group4'];
							$qr1="UPDATE `groups` SET `groupname`='$g1' WHERE group_id='1'";
							mysqli_query( $con, $qr1 );
							$qr1="UPDATE `groups` SET `groupname`='$g2' WHERE group_id='2'";
							mysqli_query( $con, $qr1 );
							$qr1="UPDATE `groups` SET `groupname`='$g3' WHERE group_id='3'";
							mysqli_query( $con, $qr1 );
							$qr1="UPDATE `groups` SET `groupname`='$g4' WHERE group_id='4'";
							mysqli_query( $con, $qr1 );
							?>
							<script>window.location.assign( "addresult.php?idd=<?php echo $idd ?>" );</script>
						<?php	
						}
			if(isset($_POST['ok']))
			{
				$fname=$_POST['fname'];				
				$sname=$_POST['sname'];
				$tname=$_POST['tname'];
				
				$fgroup=$_POST['Group1'];
				$sgroup=$_POST['Group2'];
				$tgroup=$_POST['Group3'];
				
				if($flag==1){
					$qry1="UPDATE `results` SET `student_id`='$fname',`std_group`='$fgroup' WHERE status='first' and event_id='$idd'";
							$exe1 = mysqli_query( $con, $qry1 );

				}
				else
					 {
					$qry1 = "INSERT INTO `results`(`event_id`, `student_id`, `status`, `std_group`) VALUES ('$idd','$fname','first','$fgroup')";
					$exe1 = mysqli_query( $con, $qry1 );
					 }
				if($flag2==1){
					$qry2="UPDATE `results` SET `student_id`='$sname',`std_group`='$sgroup' WHERE status='second' and event_id='$idd'";
							$exe2 = mysqli_query( $con, $qry2 );

				}
				else{
						$qry2 = "INSERT INTO `results`(`event_id`, `student_id`, `status`, `std_group`) VALUES ('$idd','$sname','second','$sgroup')";
							$exe2 = mysqli_query( $con, $qry2 );
					 }
			if($flag3==1){
					$qry3="UPDATE `results` SET `student_id`='$tname',`std_group`='$tgroup' WHERE status='third' and event_id='$idd'";
							$exe3 = mysqli_query( $con, $qry3 );

				}
				else
					 {
					$qry3 = "INSERT INTO `results`(`event_id`, `student_id`, `status`, `std_group`) VALUES ('$idd','$tname','third','$tgroup')";	
						$exe3 = mysqli_query( $con, $qry3 );
					 }
			
				if($exe3 || $exc1 || $exc2)
		{
			?>
						<script>
							alert( "success" );
							window.location.assign( "result.php?idd=<?php echo $idd2 ?>" );
						</script>
						<?php
						} else {
							?>
						<script>
							alert( "faild" );
							//window.location.assign("addresult.php");
						</script>
						<?php
						}
						}
						
						?>
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