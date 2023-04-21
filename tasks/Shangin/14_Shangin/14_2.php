<?php
	header('Location: index.php?success=1');
?>  
<br>
<?php
	if (!isset($_GET['num'])) {
		header('Location: ?num=1');
	}
	
	echo $_GET['arg']; 
?>