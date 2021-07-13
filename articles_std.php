
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
          <h2><span>Articles</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <table width="100%" >
            	<tr bgcolor="#CEEC7F">
					
            		<td>Type</td>
            		<td>Student name</td>
            		<td>Department</td>
            		<td>Year</td>
					
            	</tr>
           
          </form>
           <?php 
	
		$qry="SELECT a.status,a.article_id,a.type,b.name,b.department,b.year,a.docfile,a.textfile FROM `article` a,`students` b,`union` c where a.student_id=b.student_id and a.union_id=c.union_id order by a.`article_id` desc "  ;
		$exc=mysqli_query($con,$qry);
			 
			while($row=mysqli_fetch_array($exc))
	{
		?>
		<tr bgcolor="#9EF9BF">
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['department'];?></td>
			<td><?php echo $row['year'];?></td>
      <td>
      <?php if($row['status']=="Pending") {
        ?>
      <a href="publisharticle.php?idd=<?php echo $row['article_id'];?>">Publish</a>
      <?php } else { echo $row['status']; } ?>
			</td></tr>
		
      <?php if($row['textfile']) {
        ?>
			<tr><td colspan="100%" align="center">
    <pre><?php echo $row['textfile'];?></pre></td></tr>
     <?php } 
     if($row['docfile']) {
      ?><tr><td colspan="100%" align="center">
        <?php  
        $str=$row['docfile']; 
               $loc=substr($str,8); ?>
      <a href="upload/<?php echo $loc ?>"download><font color="#24840D">Download</font></a>
			  </td></tr>
      <?php }
        ?>

     </td></tr>
		<?php
	}
			  ?></table>
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
