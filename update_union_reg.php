
<?php
include('connect.php');
include('header.php');
$idd=$_GET['idd'];
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        
        <?php
	$qry1="select * from `union`  WHERE `union_id`='$idd'";
		$exc1=mysqli_query($con,$qry1);
	$row=mysqli_fetch_array($exc1);
	$qry="select * from `login`  WHERE `login_id`='$idd'";
    $exc=mysqli_query($con,$qry);
  $row1=mysqli_fetch_array($exc);
	?>
        <div class="article">
          <h2><span>Update Union Details</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
           <table>
            	<tr>
            		<td> <label for="name">Name of Union</label></td>
            		<td> <input type="text" id="name" name="union" class="text" value="<?php echo $row['u_name'];?>"/></td>
            	</tr>
            	<tr>
            		<td> <label for="name">Year</label></td>
            		<td> <input type="date" id="name" name="year"  value="<?php echo $row['year'];?>"/></td>
            	</tr>
            	<tr>
            		<td> <label for="name">Union Adviser</label></td>
            		<td> <input type="text" id="name" name="adviser" class="text" value="<?php echo $row['adviser'];?>"/></td>	
				</tr>
				<tr>
					<td><h3>General Seats</h3></td>
				</tr>
				<tr><td></td><td>Names</td></tr>
           		           <tr>
            		<td> <label for="name">Chairman</label></td>
            		<td> <input type="text"  id="name" name="chairman" class="text" value="<?php echo $row['chairman'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Vice Chairman</label></td>
            		<td> <input type="text" id="name" name="vicechairman" class="text" value="<?php echo $row['vice_chairman'];?>"/></td>
				</tr>
             <tr>
            		<td> <label for="name">Secretary</label></td>
            		<td> <input type="text" id="name" name="secretary" class="text" value="<?php echo $row['secretary'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Join Secretary</label></td>
            		<td> <input type="text" id="name" name="jsecretary" class="text" value="<?php echo $row['join_secretary'];?>" /></td>
				</tr>
           <tr>
            		<td> <label for="name">UUC 1</label></td>
            		<td> <input type="text" id="name" name="UUC1" class="text" value="<?php echo $row['uuc_1'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">UUC 2</label></td>
            		<td> <input type="text" id="name" name="UUC2" class="text" value="<?php echo $row['uuc_2'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Fine Arts Secretary</label></td>
            		<td> <input type="text" id="name" name="finearts" class="text" value="<?php echo $row['finearts'];?>" /></td>
				</tr>
           <tr>
            		<td> <label for="name">Chief Student Editor</label></td>
            		<td> <input type="text" id="name" name="editor" class="text" value="<?php echo $row['editor'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">General Captain</label></td>
            		<td> <input type="text" id="name" name="generalcaptain" class="text" value="<?php echo $row['general_captain'];?>" /></td>
				</tr>
           <tr>
					<td><h3>Representatives</h3></td>
				</tr>
           <tr>
            		<td> <label for="name">1<sup>st</sup> DC Representative</label></td>
            		<td> <input type="text" id="name" name="1stdc" class="text" value="<?php echo $row['1_dc'];?>" /></td>
				</tr>
            <tr>
            		<td> <label for="name">2<sup>nd</sup> DC Representative</label></td>
            		<td> <input type="text" id="name" name="2nddc" class="text" value="<?php echo $row['2_dc'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">3<sup>rd</sup> DC Representative</label></td>
            		<td> <input type="text" id="name" name="3rddc" class="text" value="<?php echo $row['3_dc'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">PG Representative</label></td>
            		<td> <input type="text" id="name" name="pg" class="text" value="<?php echo $row['pg_rep'];?>"/></td>
				</tr>
         		<tr>
          		<td><h3>Association Secretaries</h3></td>
				</tr>
           <tr>
            		<td> <label for="name">Biotechnology AS</label></td>
            		<td> <input type="text" id="name" name="biotec" class="text" value="<?php echo $row['biotech'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Food Technology AS</label></td>
            		<td> <input type="text" id="name" name="foodtec" class="text" value="<?php echo $row['foodtech'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Microbiology AS</label></td>
            		<td> <input type="text" id="name" name="micro" class="text" value="<?php echo $row['micro'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Commerce AS</label></td>
            		<td> <input type="text" id="name" name="commerce" class="text" value="<?php echo $row['commerce'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Management Studies AS</label></td>
            		<td> <input type="text" id="name" name="ms" class="text" value="<?php echo $row['management'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Computer Science & Application AS</label></td>
            		<td> <input type="text" id="name" name="csa" class="text" value="<?php echo $row['cs'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Journalism & Mass Communication AS</label></td>
            		<td> <input type="text" id="name" name="jmc" class="text" value="<?php echo $row['mcj'];?>"/></td>
				</tr>
           <tr>
            		<td> <label for="name">Economics AS</label></td>
            		<td> <input type="text" id="name" name="eco" class="text" value="<?php echo $row['economics'];?>"/></td>
				</tr>
           
				<tr></tr>
				<tr bgcolor="#B5B5B5">
					<td> <label for="name"><b>User Name</b></label></td>
            		<td> <input type="text" id="name" name="username" class="text" value="<?php echo $row1['user_name'];?>" required/></td>
			   </tr><tr bgcolor="#B5B5B5">
					<td> <label for="name"><b>Password</b></label></td>
            		<td> <input type="password" id="name" name="password" class="text" value="<?php echo $row1['password'];?>" required maxlength="10"/></td><td><input type="image" src="images/eye.png" width="20" height="20"
            			onmouseenter="password.type='text'" onmouseleave="password.type='password'" onClick="return false"> </td>
				</tr>
            
            <br>
            <tr >
                     <td colspan="100%">  <center> <input type="submit" name="upload" value="Update" /></center></td>
				</tr>  </table>
          </form>
          <?php



			if(isset($_POST['upload']))
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

      $qry="UPDATE `union` SET `u_name`='$union',`year`='$year',`adviser`='$adviser',`chairman`='$chairman',`vice_chairman`='$visechairman',`secretary`='$secretary',`join_secretary`='$jsecretary',`uuc_1`='$UUC1',`uuc_2`='$UUC2',`finearts`='$finearts',`editor`='$editor',`general_captain`='$generalcaptain',`1_dc`='$stdc1',`2_dc`='$nddc2',`3_dc`='$rddc3',`pg_rep`='$pg',`biotech`='$biotec',`foodtech`='$foodtec',`micro`='$micro',`commerce`='$commerce',`management`='$ms',`cs`='$csa',`mcj`='$jmc',`economics`='$eco',`i_s`='$is',`i_f`='$if' WHERE `union_id`='$idd'";
				
    
$exe= mysqli_query( $con, $qry );
    
   $qry11="UPDATE `login` SET `user_name`='$username',`password`='$password' WHERE `login_id`='$idd'";
		
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
