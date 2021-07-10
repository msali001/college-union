
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
          <h2><span>Register Student</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table>
            	<tr>
            		<td> <label for="name">Student Name</label></td>
            		<td> <input type="text" id="name" name="name" class="text" required/></td>
            	</tr>
            	<tr>
            		<td> <label for="name">Register Id</label></td>
            		<td> <input type="text" id="name" name="registerid" class="text" required /></td>
            	</tr>
            	<tr>
            		<td> <label for="name">Department</label></td>
            		<td> <input type="text" id="name" name="dept" class="text" required/></td>	
				</tr>
				<tr>
            		<td> <label for="name">Gender</label></td>
            		<td> <input type="text" id="name" name="gender" class="text" required/></td>	
				</tr>
				
           <tr>
            		<td> <label for="name">Year</label></td>
            		<td> <input type="text" id="name" name="year" class="text" required /></td>
				</tr>
             <tr>
            		<td> <label for="name">DOB</label></td>
            		<td> <input type="date" id="name" name="dob" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Email</label></td>
            		<td> <input type="text" id="name" name="email" class="text" required /></td>
				</tr>
           <tr>
            		<td> <label for="name">Profile Picture</label></td>
            		<td> <input type="text" id="name" name="ppic" class="text" required /></td>
				</tr>
           	<tr></tr>
				<tr bgcolor="#B5B5B5">
					<td> <label for="name"><b>User Name</b></label></td>
            		<td> <input type="text" id="name" name="username" class="text" required/></td>
			   </tr><tr bgcolor="#B5B5B5">
					<td> <label for="name"><b>Password</b></label></td>
            		<td> <input type="password" id="name" name="password" class="text" required maxlength="10" />
            		</td><td><input type="image" src="images/eye.png" width="20" height="20"
            			onmouseenter="password.type='text'" onmouseleave="password.type='password'" onClick="return false"> </td>
				</tr>
            
            <br>
            <tr >
                     <td colspan="100%">  <center> <input type="submit" name="register" value="Register" /></center></td>
				</tr>  </table>
          </form>
         <?php
	if(isset($_POST['register']))
	{
		$name=$_POST['name'];
		$year=$_POST['year'];
		$dept=$_POST['dept'];
		$registerid=$_POST['registerid'];		
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];		
		$email=$_POST['email'];			
		$ppic=$_POST['ppic'];						
		$username=$_POST['username'];		
		$password=$_POST['password'];		
			
			$qry1 = "select max(login_id) as maxid from `login` ";
							$exe1 = mysqli_query( $con, $qry1 );
							$row = mysqli_fetch_array( $exe1 );
							$max = 0;

							if ( $row[ 'maxid' ] == 0 ) {
								$max = 1000;
							} else {
								$max = $row[ 'maxid' ] + 1;
							}
							
		$qry="INSERT INTO `students` (`student_id`, `register`, `name`, `department`, `year`, `gender`, `dob`, `email`, `dp`) VALUES ('$max', '$registerid', '$name', '$dept', '$year', '$gender', '$dob', '$email', '$ppic')";
//		$qry="INSERT INTO `union`(`union_id`, `u_name`, `year`, `adviser`, `chairman`, `vice_chairman`, `secretary`, `join_secretary`, `uuc_1`, `uuc_2`, `finearts`, `editor`, `general_captain`, `1_dc`, `2_dc`, `3_dc`, `pg_rep`, `biotech`, `foodtech`, `micro`, `commerce`, `management`, `cs`, `mcj`, `economics`, `i_s`, `i_f`) VALUES ('$max','$union','$year','$adviser','$chairman','$visechairman','$secretary','$jsecretary','$UUC1','$UUC2','$finearts','$editor','$generalcaptain','$stdc1','$nddc2','$rddc3','$pg','$biotec','$foodtec','$micro','$commerce','$ms','$csa','$jmc','$eco','$is','$if')";
		
$exe= mysqli_query( $con, $qry );
		
		$qry11="INSERT INTO `login`(`login_id`,`user_name`, `password`, `type`) VALUES ('$max','$username','$password','student')";
		
$exe11= mysqli_query( $con, $qry11 );
	
		if($exe && $exe11)
		{
			?>
			<script>
	alert("success");
	window.location.assign("registerstudent.php");
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
