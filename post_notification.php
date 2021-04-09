<?php 
include('connect.php');
include('header.php');

?>
<script>
	function formcheck() {
		var flag=0;
  var fields = $(".ss-item-required")
        .find("select, textarea, input").serializeArray();
  
  $.each(fields, function(i, field) {
    if (!field.value){
      document.getElementById("error").innerHTML=(field.name + ' is required\n'); 
		flag=1;
	}
   }); 
	if (flag==0)
		return true;
		else
			return false;
}
</script>
		<div class="content">
			<div class="content_resize">
				<div class="mainbar">
					<div class="article">

						<div class="clr"></div>

					</div>
					<div class="article">
						<h2><span>Post Notification</span></h2>
						<div class="clr"></div>
						<form method="post" onsubmit="return formcheck()" action="">
						<div class="ss-item-required">
<p id="error"></p>
							<table>
			

								<tr>
									<td><label for="name">Notification</label>
									</td>
									<td colspan="3"><textarea name="notification" rows="6" cols="30"
									></textarea>
									</td>
								</tr>
								
								<tr >
									<td><label  for="name">Sent to</label></td>
									
									<td ><input type="radio" name="to" value="students" required/>Students</td>
									<td><input type="radio" name="to" value="union"/>Union</td>
								</tr>
								<tr>
									<tr></tr>
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="submit" name="post" value="SENT" />
									</td>
								</tr>
							</table>
							</div>
						</form>
						<?php
						if ( isset( $_POST[ 'post' ] ) ) 
						{
							$date = date( 'Y-m-d' );
							$notification = $_POST[ 'notification' ];
							$type = $_POST[ 'to' ];
							$qry = "INSERT INTO `notifications`(`notification`, `date`,`type`) VALUES ('$notification','$date','$type')";
							$exe = mysqli_query( $con, $qry );
									
				if($exe)
					
		{
			?>
			<script>
	alert("success");
	window.location.assign("post_notification.php");
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
</html>s