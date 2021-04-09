<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
	include('connect.php');
  include('redirect.php');
		$pid=$_SESSION['pid']; 

	?>
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
<style>
	#note{
	color: red;
	}</style>
	<script src="js/dynamic.js">
</script>
	<script>
//Add Input Fields
$(document).ready(function() {
    var max_fields = 500; //Maximum allowed input fields 
    var wrapper    = $(".wrapper"); //Input fields wrapper
    var add_button = $(".add_fields"); //Add button class or ID
    var x = 1; //Initial input field is set to 1
	
	//When user click on add input button
	$(add_button).click(function(e){
        e.preventDefault();
		//Check maximum allowed input fields
        if(x < max_fields){ 
            x++; //input field increment
			 //add input field
            $(wrapper).append('<div><input type="text" name="input_array_name[]" placeholder="Input Text Here" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
		}
    });
	
    //when user click on remove button
    $(wrapper).on("click",".remove_field", function(e){ 
        e.preventDefault();
		$(this).parent('div').remove(); //remove inout field
		x--; //inout field decrement
    })
});
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.html"><span>Home Page</span></a></li>
          <li class="active"><a href="logout.php"><span>Logout</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html">SAFI<span>Institute</span> <small>Rasiya Nagar</small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="940" height="336" alt="" /> </a> </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>ADD EVENT ITEMS</span></h2>
          <div class="clr"></div>
          
<form name="FormData" method="post" action="" >
<div class="wrapper">
<div><input type="text" name="input_array_name[]" class="text" placeholder="Input Text Here" required /></div>
</div>
<p><button class="add_fields">Add More Fields</button></p>
<input type="submit" value="Submit" name="ok" />
</form>
 
<?php
			

//$array_values="";
if (isset($_POST["input_array_name"]) && is_array($_POST["input_array_name"])){ 
    $input_array_name = array_filter($_POST["input_array_name"]);
	
	
	
    foreach($input_array_name as $field_value){
       // $array_values .= $field_value."<br />";
//		echo $field_value;
		$qry="INSERT INTO `events`(`program_id`, `event`) VALUES ('$pid','$field_value')";
		$exe=mysqli_query($con,$qry);
	}
		if($exe)
		{
			?>
			<script>
	alert("success");
	window.location.assign("programs_approved.php");
	</script>
			<?php
		}
		else
			{
			?>
			<script>
	alert("faild");
	window.location.assign("union_home.php");
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
