
<?php
include( 'connect.php' );
include('header.php');

$idd = $_SESSION[ 'uid' ];


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
						<form method="get" action="profile.php">
							<table width="100%" class="blueTable">
							<tr><td width="100%" colspan="5"><hr></td></tr>

								<tr align="center"><td colspan="3"> For Adding Your Details Select Your Position in Union </td>
								</tr><tr>
									<td>Select Position</td>
									<td>
										<select name="position" style="width: 200px" id="l1" required>
											<option value=''>Select Position</option>
											<option value="chairman "> Chairman</option>
											<option value="vicechairman"> Vice Chairman</option>
											<option value="secretary"> Secretary</option>
											<option value="jsecretary"> Join Secretary</option>
											<option value="UUC1"> UUC 1</option>
											<option value="UUC2"> UUC 2</option>
											<option value="finearts">Fine Arts Secretary">
												<option value="editor"> Chief Student Editor</option>
												<option value="generalcaptain ">General Captain</option>
												<option value="1stdc"> 1st DC Representative</option>
												<option value="2nddc ">2nd DC Representative</option>
												<option value="3rddc"> 3rd DC Representative</option>
												<option value="pg ">PG Representative</option>
												<option value="biotec"> Biotechnology AS</option>
												<option value="foodtec "> Food Technology AS</option>
												<option value="micro">Microbiology AS</option>
												<option value="commerce"> Commerce AS</option>
												<option value="ms"> Management Studies AS</option>
												<option value="csa ">Computer Science & Application AS</option>
												<option value="jmc">Journalism & Mass Communication AS </ option>
													<option value="eco "> Economics AS</option>
													<option value="is"> Islamic Studies AS</option>
													<option value="if"> Islamic Finance AS</option>
									</td>
									<td><input type="submit" value="Submit"</td>
								</tr>
							</table>
				
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
