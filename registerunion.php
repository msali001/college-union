
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
          <h2><span>Register Union</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table>
            	<tr>
            		<td> <label for="name">Name of Union</label></td>
            		<td> <input type="text" id="name" name="union" class="text" required/></td>
            	</tr>
            	<tr>
            		<td> <label for="name">Year</label></td>
            		<td> <input type="date" id="name" name="year" class="text" required /></td>
            	</tr>
            	<tr>
            		<td> <label for="name">Union Adviser</label></td>
            		<td> <input type="text" id="name" name="adviser" class="text" required/></td>	
				</tr>
				<tr>
					<td><h3>General Seats</h3></td>
				</tr>
				<tr><td></td><td>Names</td></tr>
           		           <tr>
            		<td> <label for="name">Chairman</label></td>
            		<td> <input type="text"  id="name" name="chairman" class="text"  required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Vice Chairman</label></td>
            		<td> <input type="text" id="name" name="vicechairman" class="text" required /></td>
				</tr>
             <tr>
            		<td> <label for="name">Secretary</label></td>
            		<td> <input type="text" id="name" name="secretary" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Join Secretary</label></td>
            		<td> <input type="text" id="name" name="jsecretary" class="text" required /></td>
				</tr>
           <tr>
            		<td> <label for="name">UUC 1</label></td>
            		<td> <input type="text" id="name" name="UUC1" class="text" required /></td>
				</tr>
           <tr>
            		<td> <label for="name">UUC 2</label></td>
            		<td> <input type="text" id="name" name="UUC2" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Fine Arts Secretary</label></td>
            		<td> <input type="text" id="name" name="finearts" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Chief Student Editor</label></td>
            		<td> <input type="text" id="name" name="editor" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">General Captain</label></td>
            		<td> <input type="text" id="name" name="generalcaptain" class="text" required/></td>
				</tr>
           <tr>
					<td><h3>Representatives</h3></td>
				</tr>
           <tr>
            		<td> <label for="name">1<sup>st</sup> DC Representative</label></td>
            		<td> <input type="text" id="name" name="1stdc" class="text" required/></td>
				</tr>
            <tr>
            		<td> <label for="name">2<sup>nd</sup> DC Representative</label></td>
            		<td> <input type="text" id="name" name="2nddc" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">3<sup>rd</sup> DC Representative</label></td>
            		<td> <input type="text" id="name" name="3rddc" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">PG Representative</label></td>
            		<td> <input type="text" id="name" name="pg" class="text" required/></td>
				</tr>
         		<tr>
          		<td><h3>Association Secretaries</h3></td>
				</tr>
           <tr>
            		<td> <label for="name">Biotechnology AS</label></td>
            		<td> <input type="text" id="name" name="biotec" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Food Technology AS</label></td>
            		<td> <input type="text" id="name" name="foodtec" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Microbiology AS</label></td>
            		<td> <input type="text" id="name" name="micro" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Commerce AS</label></td>
            		<td> <input type="text" id="name" name="commerce" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Management Studies AS</label></td>
            		<td> <input type="text" id="name" name="ms" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Computer Science & Application AS</label></td>
            		<td> <input type="text" id="name" name="csa" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Journalism & Mass Communication AS</label></td>
            		<td> <input type="text" id="name" name="jmc" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Economics AS</label></td>
            		<td> <input type="text" id="name" name="eco" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Islamic Studies AS</label></td>
            		<td> <input type="text" id="name" name="is" class="text" required/></td>
				</tr>
           <tr>
            		<td> <label for="name">Islamic Finance AS</label></td>
            		<td> <input type="text" id="name" name="if" class="text" required/></td>
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
		$union=$_POST['union'];
		$year=$_POST['year'];
			$adviser=$_POST['adviser'];
			$chairman=$_POST['chairman'];		
			$visechairman=$_POST['vicechairman'];		
			$secretary=$_POST['secretary'];			
			$jsecretary=$_POST['jsecretary'];			
			$UUC1=$_POST['UUC1'];			
			$UUC2=$_POST['UUC2'];			
			$finearts=$_POST['finearts'];	
			$editor=$_POST['editor'];					
			$generalcaptain=$_POST['generalcaptain'];
			$stdc1=$_POST['1stdc'];			
			$nddc2=$_POST['2nddc'];			
			$rddc3=$_POST['3rddc'];			
			$pg=$_POST['pg'];			
			$biotec=$_POST['biotec'];	
			$foodtec=$_POST['foodtec'];	
			$micro=$_POST['micro'];		
			$commerce=$_POST['commerce'];
			$ms=$_POST['ms'];			
			$csa=$_POST['csa'];			
			$jmc=$_POST['jmc'];			
			$eco=$_POST['eco'];			
			$is=$_POST['is'];		
			$if=$_POST['if'];
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
							
		
		$qry="INSERT INTO `union`(`union_id`, `u_name`, `year`, `adviser`, `chairman`, `vice_chairman`, `secretary`, `join_secretary`, `uuc_1`, `uuc_2`, `finearts`, `editor`, `general_captain`, `1_dc`, `2_dc`, `3_dc`, `pg_rep`, `biotech`, `foodtech`, `micro`, `commerce`, `management`, `cs`, `mcj`, `economics`, `i_s`, `i_f`) VALUES ('$max','$union','$year','$adviser','$chairman','$visechairman','$secretary','$jsecretary','$UUC1','$UUC2','$finearts','$editor','$generalcaptain','$stdc1','$nddc2','$rddc3','$pg','$biotec','$foodtec','$micro','$commerce','$ms','$csa','$jmc','$eco','$is','$if')";
		
$exe= mysqli_query( $con, $qry );
		
		$qry11="INSERT INTO `login`(`login_id`,`user_name`, `password`, `type`) VALUES ('$max','$username','$password','union')";
		
$exe11= mysqli_query( $con, $qry11 );
	
		if($exe && $exe11)
		{
			?>
			<script>
	alert("success");
	window.location.assign("manage_union.php");
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
