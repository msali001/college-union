<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include('connect.php');
include('header.php');
$uid=$_SESSION['uid'];
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>UPLOAD MAGAZINE</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail" enctype="multipart/form-data">
           <table>
          	 <tr>
          	 	<td>
          	 		   <label for="name">Name of Magazine</label></td>
          	 	<td><input type="text" name="name"></td>
          	 </tr>
           	 <tr><td>
                <label for="name">Select file</label></td>
               <td> <input type="file" name="file" accept="application/pdf"></td></tr>
      		<tr>
      			<td></td>
      		<td><p id="notees">*file must be in pdf formate* </p></td>
            </tr>
             
              <tr><br></tr>
              <tr><br></tr>
               <tr>
              <td></td>
              	<td>
              	<input  type="submit"  name="upload" id="imageField" value="Upload"   class="send" />
              	<div class="clr"></div>
              	</td>
              
              </tr>
                
                
              
              
            </ol>
           </table>
           
          </form>
             <?php
			if(isset($_POST['upload']))
			{
				$name=$_POST['name'];
				
				
	$fileup = $_FILES[ "file" ][ "name" ];
	$filetype = $_FILES[ "file" ][ "type" ];
	if($filetype=="application/pdf")
	{
		// modified to relative path from absolute
	// $folder = "C:/wamp/www/colorflames/upload/";
	$folder = "/upload/";
							move_uploaded_file( $_FILES[ "file" ][ "tmp_name" ], "$folder" . $_FILES[ "file" ][ "name" ] );
		
				$qry = "INSERT INTO `magazine`(`union_id`, `m_name`,`file`,`status`) VALUES ('$uid','$name','$fileup','Pending')";
							$exe = mysqli_query( $con, $qry );
						
				if($exe)
					
		{
			?>
			<script>
	alert("success");
	window.location.assign("approved_magazine.php");
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
		
	}else
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
