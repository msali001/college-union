
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
          <h2><span>Union Gallery</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table width="100%" class="blueTable">
            	
            
            <br>
           
          </form>
          <?php 
	$count=0;
		$qry="SELECT * FROM `gallery` order by gallery_id desc";
		$exc=mysqli_query($con,$qry);
			 ?><tr><?php
			while($row=mysqli_fetch_array($exc))
	{ $count++;
		?>
		<td>
			<ol><li><a href="media/<?php print $row['file'];?>"> <img src="media/<?php print $row['file'];?>" width="105" height="120" onerror=src="images/userpic2.jpg" name="image"  ></a></li>
           		<li><a href="deleteimage.php?idd=<?php echo $row['gallery_id'];?>">Delete</a></li></ol></td>
            		
            		

	 <?php
			if($count==6){
				$count=0;
			?></tr><?php
				
			}
	}
			  ?></tr></table>

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
