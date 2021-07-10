
<?php
include('connect.php');
include('header.php');

$idd=$_SESSION['uid'];

?>
  <script type="text/javascript">
function radio_check()
{
if(document.drop_list.choice[1].checked || document.drop_list.choice[2].checked ){
document.getElementById("l1").disabled=true;
}else{
document.getElementById("l1").disabled=false;
}
}</script>
		<div class="content">
			<div class="content_resize">
				<div class="mainbar">
					<div class="article">

						<div class="clr"></div>

					</div>
					<div class="article">
						<h2><span>PROGRAM NOTIFICATION</span></h2>
						<div class="clr"></div>
						<form method="post"   name="drop_list" id="f1">
							<table>
								<tr>
									<td><label for="name">Name of the Program</label>
									</td>
									<td> <input type="text" id="name" name="name" class="text" required="" />
									</td>
								</tr>
								<tr>
									<td><label for="name">Contucted by</label>
									</td>
									<td><input type="radio" name="choice" value="Department" onClick="radio_check()";>Department</td>
									<td width="100"><input type="radio" name="choice" value="Union" onClick="radio_check()"; >Union</td>
									<td><input type="radio" name="choice" value="nss" onClick="radio_check()";>NSS</td>
									
								</tr>
								<tr>
									<td></td>
									<td>
										<select name="choice"  style="width: 150px" id="l1"  required>
											<option value=''>Select Department</option>
											<option value="B.Sc.Biotechnology"> B.Sc.Biotechnology</option>
											<option value="B.Sc.Microbiology"> B.Sc.Microbiology</option>
											<option value="B.Sc.Food Science and Technology"> B.Sc.Food Science and Technology</option>
											<option value="B.Com with Finance          	"> B.Com with Finance</option>
											<option value="B.Com				"> B.Com</option>
											<option value="BBA				"> BBA</option>
											<option value="BCA  					"> BCA </option>
											<option value="BSc.Computer Science			"> BSc.Computer Science</option>

											<option value="Microbiology		"> Microbiology</option>
											<option value="M.A. Mass Communication & Journalism"> M.A. Mass Communication & Journalism</option>
											<option value="MSc.Bio Technology 		"> MSc.Bio Technology</option>
											<option value="Food Science and Technology  	"> Food Science and Technology</option>
											<option value="Commerce & Management Studies  	"> Commerce & Management Studies</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for="name">Date</label>
									</td>
									<td> <input type="date" id="name" name="date" class="text"/>
									</td>
								</tr>
								<tr>
									<td><label for="name">Time</label>
									</td>
									<td> <input type="time" id="name" name="time" class="text"/>
									</td>
								</tr>
							
								<tr>
									<td><label for="name">Venue</label>
									</td>
									<td> <input type="text" id="name" name="venue" class="text"/>
									</td>
								</tr>
									<tr>
									<td><label for="name">Guest</label>
									</td>
									<td> <input type="text" id="name" name="guest" class="text"/>
									</td>
									<tr>
									<td><label for="name">Any Events</label>
									</td>
									<td><input type="radio" name="answer" value="yes" required>Yes</td>
									<td><input type="radio" name="answer" value="no" >No</td>
									
								</tr>
									<tr></tr>
								</tr>
								<td></td>
								<td><input   type="submit"  name="publish"   value="Sent Request" >
								</td>
							
							</table>
									
						</form>
      <?php
			if(isset($_POST['publish']))
			{
				$name=$_POST['name'];
				$by=$_POST['choice'];
				$date=$_POST['date'];
				$time=$_POST['time'];
				$venue=$_POST['venue'];
				$guest=$_POST['guest'];
				$event=$_POST['answer'];
				
				
							$qry1 = "select max(program_id) as maxid from programs ";
							$exe1 = mysqli_query( $con, $qry1 );
							$row = mysqli_fetch_array( $exe1 );
							$max = 0;

							if ( $row[ 'maxid' ] == 0 ) {
								$max = 2000;
							} else {
								$max = $row[ 'maxid' ] + 1;
							}
				$_SESSION['pid']=$max;
				if($event=='no')
				{
					
				$qry="INSERT INTO `programs`(`program_id`,`union_id`, `name`, `conducted`, `date`, `time`,`venue`, `guest`, `events`, `status`) VALUES ('$max','$idd','$name','$by','$date','$time','$venue','$guest','$event','Pending')";
				$exe=mysqli_query($con,$qry);
				
				if($exe)
		{
			?>
			<script>
	alert("success");
	window.location.assign("program_notification.php");
	</script>
			<?php
		}
		else
			{
			?>
			<script>
	alert("faild");
	//window.location.assign("add_news.php");
	</script>
			<?php
		}
				}
				else
				{
							$qry="INSERT INTO `programs`( `program_id`,`union_id`,`name`, `conducted`, `date`, `time`, `venue`, `guest`, `events`, `status`) VALUES ('$max','$idd','$name','$by','$date','$time','$venue','$guest','$event','Pending')";
				$exe=mysqli_query($con,$qry);
				
				if($exe)
		{
			?>
			<script>

	window.location.assign("add_evt.php");
	</script>
			<?php
		}
		else
			{
			?>
			<script>
	alert("faild");
	//window.location.assign("add_news.php");
	</script>
			<?php
		}
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
