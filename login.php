<?php 
include('connect.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ColorFlames | Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<link rel="stylesheet" href="css/table.css" type="text/css">
<script type="text/javascript" src="js/enterkey.js"></script>
<script type="text/javascript" src="js/print.js"></script>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
     <div class="menu_nav">
					
				</div>
      <div class="logo">
        <h1><a href="index.html">SAFI<span>Institute</span> <small>Rasiya Nagar</small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="940" height="336" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="940" height="336" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="940" height="336" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  </div>
   <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>Login</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail">
            <ol>
              <li>
                <label for="name">Username</label>
                <input type="text" id="name" name="username" required class="text" />
              </li>
              <li>
                <label for="email">Password</label>
                <input type="password" id="email" name="password" required class="text" />
              </li>
              
              <li>
                <input type="submit" name="reg" id="imageField" value="login"  src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
          <?php
			if(isset($_POST['reg']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
					
				$qry="select * from login";
				$exe=mysqli_query($con,$qry);
				$flag=0;
				while($row=mysqli_fetch_array($exe))
				{
					$id=$row['login_id'];
					$uname=$row['user_name'];
					$pword=$row['password'];
					$type=$row['type'];
					if(($username==$uname)&&($password==$pword)&&($type=='admin'))
					{
						$_SESSION['uid']=$id;
						$flag=1;
						?>
						<script>
			window.location.assign("admin_home.php");
			</script>
						<?php
					}
					if(($username==$uname)&&($password==$pword)&&($type=='union'))
					{
						$_SESSION['uid']=$id;

						$flag=1;
						?>
						<script>
			window.location.assign("union_home.php");
			</script>
						<?php
					}
						
				}
				if($flag==0)
				{
				?>
						<script>
							alert('Incorrect password');
			window.location.assign("login.php");
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
