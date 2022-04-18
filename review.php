<?php

if(isset($_POST['logg']))
{
	$revv = $_POST['tr'];

	$filename = fopen("review1.txt" , "a") or die ("Error!");
	
	fwrite($filename, $revv. "\n");
	
	fclose($filename);
}

?>

<script type="text/javascript">
      //then it will be redirected
      alert("Happy Birthday po ulit. Thank You!")
      window.location = "April.php";
  </script>