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
        <?php   $qry0 = "select * from `instruction` where instruction_id='1'";
							$exe0 = mysqli_query( $con, $qry0 );
			$row=mysqli_fetch_array($exe0);
		  
			?>
        <div class="article">
          <h2><span>INSTRUCTION FOR STUDENTS</span></h2>
          <div class="clr"></div>
          
          <form  method="post" id="sendemail">
           
            <ol>
              <li>
                <label for="name">Instuction</label>
                <textarea rows="25" name="instruction"  > <?php echo $row['instruction']; ?></textarea>
									
              </li>
        
              <center>
              <li>
                <input  type="submit"  name="publish" id="imageField" value="Publish"   class="send" />
                <div class="clr"></div>
              </li>
              </center>
            </ol>
          </form>
         <?php
						if ( isset( $_POST[ 'publish' ] ) ) {
							$inst = $_POST[ 'instruction' ];
							$qry = "UPDATE `instruction` SET `instruction` = '$inst' where instruction_id='1'";
							$exe = mysqli_query( $con, $qry );
						
			
				if($exe)
					
		{
			?>
			<script>
	alert("success");
	window.location.assign("upload_inst.php");
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
