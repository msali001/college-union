
<?php
include('connect.php');
include('header.php');

$idd=$_SESSION['uid'];

?>		<div class="content">
			<div class="content_resize">
				<div class="mainbar">
					<div class="article">

						<div class="clr"></div>

					</div>
					<?php
						$qry0="SELECT * FROM `students` WHERE `student_id` = $idd ";
						$exe0=mysqli_query($con,$qry0);
						$row0=mysqli_fetch_assoc($exe0);
						$name=$row0['name'];
						$dept=$row0['department'];
						$regi=$row0['student_id'];
				
				?>
					<div class="article">
						<h2><span>Student Feedback</span></h2>
						<div class="clr"></div>
						<form method="post"   name="drop_list" id="f1">
							<table>
								<tr>
									<td><label for="name">Student Name</label>
									</td>
									<td><b><?php echo $name ?></b>
									</td>
								</tr>
								<tr>
									<td><label for="name">Department</label>
									</td>
									<td><b><?php echo $dept ?></b>
									<input type="hidden" id="name" name="std" class="text" value="<?php echo $regi ?>"/>
									</td>
								</tr>
								
								
								<tr>
									<td></td>
									<td>
										<select name="union"  style="width: 150px" id="l1"  required>
											<option value='' disabled>Select Union</option>
											<?php 
	$count=0;
		$qry="SELECT `union_id`,`u_name` FROM `union` ORDER BY `union_id` DESC";
		$exc=mysqli_query($con,$qry);
			 ?><?php
			while($row=mysqli_fetch_array($exc))
	{ $count++;
		?>
											<option value="<?php echo $row['union_id']; ?>"> <?php echo $row['u_name']; ?></option>
											<?php } ?>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for="name">Feedback</label>
									</td>
									<td> <textarea id="name" name="feed" class="text" rows="4" cols="50">
</textarea>
									</td>
								</tr>
								
									<tr></tr>
								</tr>
								<td></td>
								<td><input   type="submit"  name="publish"   value="Sent Feedback" >
								</td>
							
							</table>
									
						</form>
      <?php
			if(isset($_POST['publish']))
			{
				$student=$_POST['std'];
				$union=$_POST['union'];
				$feed=$_POST['feed'];
					
				$qry="INSERT INTO `feedbacks`(`union_id`, `std_id`, `feedback`) VALUES ('$union', '$student', '$feed')";
				$exe=mysqli_query($con,$qry);

				// echo $qry;
				
				if($exe)
		{
			?>
			<script>
	alert("success");
	window.location.assign("student_home.php");
	</script>
	<?php
		}
}
	?>
				
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
