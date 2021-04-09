
<?php
include('connect.php');
include('header.php');

$idd=$_GET["idd"];
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>Complaints</span></h2>
          <div class="clr"></div>
          <form  method="post">
            <table>
            	<tr>
            		<td>Reply</td>
            		<td><textarea name="repl"></textarea></td>
					<td><input type="submit" name="sent" value="Sent" >   </td>
			  </table> 
          </form>
           <?php 
			  if(isset($_POST['sent']))
			  {
				  
				  $reply=$_POST['repl'];
		$qry="UPDATE `union_managment`.`complaint` SET `reply` = '$reply ' WHERE `complaint`.`complaint_id`=$idd;" ;
		$exc=mysqli_query($con,$qry);
			if($exc)
		{
			?>
			<script>
	alert("Successfuly Sent");
	window.location.assign("complaints.php");
	</script>
			<?php
		}
		else
			{
			?>
			<script>
	alert("Faild to Sent");
	//window.location.assign("add_news.php");
	</script>
			<?php
		}
			  }
	?>
        </div>
      </div>
       
      </div>
      <div class="clr"></div>
    
  </div>
<?php
		include('footer.php');
		?>
</body>
</html>
