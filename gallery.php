<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include('connect.php');
include('header.php');
$idd=$_SESSION['uid'];
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>UPLOAD GALLERY</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail" enctype="multipart/form-data">
           <table width="50%">
           	 <tr><td>
                <label for="name">Select file</label></td>
               <td> <input type="file" align="left" name="file"  accept=" image/*" ></td></tr>
      		<tr>
      			<td></td>
      		<td>File must be image or video  formate <br> Less then 500kb </td>
            </tr>
             
              <tr><br></tr>
              <tr><br></tr>
               <tr>
              <td></td>
              	<td>
              	<input  type="submit"  name="upload" id="imageField" value="Upload"   class="send" />
              	<div class="clr"></div>
				   </td></tr>
              	 <tr><br></tr>
              <tr><br></tr>
              <tr>
              <td bgcolor="#F5FD9E" align="center" colspan="100%"><a href="gallery_items.php?idd=<?php echo $idd;?>">Go to my Albums</a></td>
			
				</tr>
              </tr>
        
           </table>
           
          </form>
          <?php
			if(isset($_POST['upload']))
			{
				
				
				
	$fileup = $_FILES[ "file" ][ "name" ];
	$filetype = $_FILES[ "file" ][ "type" ];
	if($filetype=="image/jpeg" || $filetype=="image/png" || $filetype=="image/gif"  )
	{
	$folder = "C:/wamp/www/colorflames/media/";
							move_uploaded_file( $_FILES[ "file" ][ "tmp_name" ], "$folder" . $_FILES[ "file" ][ "name" ] );
		
				$qry = "INSERT INTO `gallery`(`union_id`,`file`) VALUES ('$idd','$fileup')";
							$exe = mysqli_query( $con, $qry );
						
				if($exe)
					
		{
			?>
			<script>
	alert("success");
	window.location.assign("gallery.php");
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
		
	}else
	{
	?>
						<script>
							alert( "Select image file!!!!" );
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
