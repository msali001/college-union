<?php
$set=$_SESSION['uid'];
if(!$set)
{
	?>
	<script>
window.location.assign('login.php');
</script>
	<?php
}

?>