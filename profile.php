
<?php
include('connect.php');
include('header.php');

$uid=$_SESSION['uid'];
$position=$_GET['position'];


		$qry0="select count(members_id) as counts from members  WHERE  union_id='$uid' and position='$position'";
		$exe0=mysqli_query($con,$qry0);
	$row0=mysqli_fetch_assoc($exe0);
$count=$row0['counts'];


		$qry1="select * from members  WHERE  union_id='$uid'and position='$position'";
		$exe1=mysqli_query($con,$qry1);
	$row=mysqli_fetch_array($exe1);

?>
		<div class="content">
			<div class="content_resize">
				<div class="mainbar">
					<div class="article">

						<div class="clr"></div>

					</div>
					<div class="article">
						<h2><span>Profile</span></h2>
						<div class="clr"></div>
						<form method="post"  enctype="multipart/form-data">

							<ol>
								<li>
									<label for="name">Profile Picture</label>
									<img src="upload/<?php print $row['dp'];?>" width="100" height="100" onerror=src="images/userpic2.jpg" name="image"></li>
									<li><input type="file" align="left" name="file" accept="image/gif, image/jpeg, image/png" value="images/gal2.jpg">
								</li>
								<p id="notees">Every time select Image less than 500kb</p>
							</ol>
							<table>
								
								<tr>
								<td><label for="name" >Register Number</label>
									</td>	
									<td> <input type="text" id="name" name="register" value="<?php echo $row['register'];?>" class="text"/>
									</td>
								</tr><tr>
									<td> <label for="name">Name</label>
									</td>
									<td> <input type="text" id="name" name="name" value="<?php echo $row['mem_name'];?>" class="text"/>
									</td>
								</tr>

								<tr>
									<td><label for="name" >Department</label>
									</td>
									<td>
										<select name="department"  value="<?php echo $row['department'];?>">
											<option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option>
											<option value="B.Sc.Biotechnology"> B.Sc.Biotechnology</option>
											<option value="B.Sc.Microbiology"> B.Sc.Microbiology</option>
											<option value="B.Sc.Food Science and Technology"> B.Sc.Food Science and Technology</option>
											<option value="B.Com with Finance          	"> B.Com with Finance</option>
											<option value="M.Com				"> M.Com</option>
											<option value="BBA				"> BBA</option>
											<option value="B.A.Islamic Finance & Computer Application"> B.A.Islamic Finance & Computer Application</option>
											<option value="BCA  					"> BCA </option>
											<option value="BSc.Computer Science			"> BSc.Computer Science</option>

											<option value="M.A.Islamic Studies	"> M.A.Islamic Studies</option>
											<option value="Microbiology		"> Microbiology</option>
											<option value="M.A. Mass Communication & Journalism"> M.A. Mass Communication & Journalism</option>
											<option value="MSc.Bio Technology 		"> MSc.Bio Technology</option>
											<option value="Food Science and Technology  	"> Food Science and Technology</option>
											<option value="B.A. Economics  	"> B.A. Economics</option>
										</select>
									</td>
									
								</tr>
								<tr>
									<td> <label for="name">Mobile Number</label>
									</td>
									<td> <input type="tel" id="name" name="mno" class="text" value="<?php echo $row['mobile_number'];?>"/>
									</td>
								</tr>
								<tr>
									<td><br><br></td>
								<td>
									<input type="submit" name="update" id="imageField" value="Update" class="send"/>
									<div class="clr"></div>
								</td>
								</tr>

							</table>
						</form>
						<?php
						if(isset($_POST['update']))
	{
		
		$name=$_POST['name'];
		$register=$_POST['register'];
		$department=$_POST['department'];
		$mobile=$_POST['mno'];
		$fileup = $_FILES[ "file" ][ "name" ];
	$filetype = $_FILES[ "file" ][ "type" ];
	if($filetype=="image/jpeg" || $filetype=="image/png" || $filetype=="image/jpg" )
	{
		// relative
	$folder = "/upload/";
							move_uploaded_file( $_FILES[ "file" ][ "tmp_name" ], "$folder" . $_FILES[ "file" ][ "name" ] );
		
		
		if($count==1)
		{
		$qry="UPDATE `members` SET `mem_name`='$name',`register`='$register',`department`='$department',`mobile_number`='$mobile',`dp`='$fileup',`union_id`='$uid',`position`='$position' where `union_id`='$uid' and `position`='$position'";
		$exe=mysqli_query($con,$qry);
		}else
		{
			$qry="INSERT INTO `members`(`union_id`, `position`,`register`, `mem_name`, `department`, `mobile_number`, `dp`) VALUES ('$uid','$position','$register','$name','$department','$mobile','$fileup')";
		$exe=mysqli_query($con,$qry);
		}
			if($exe)
		{
			?>
			<script>
	alert("success");
	window.location.assign("profile_view1.php");
	</script>
			<?php
		}
		else
			{
			?>
			<script>
	alert("failed");
	</script>
			<?php
		}	
	}
	else
	{
	?>
						<script>
							alert( "Select pdf file!!!!" );
//							
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
