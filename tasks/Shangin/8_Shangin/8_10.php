<?php
	var_dump($_GET['par1']); 
?>
<br>
<?php
	var_dump($_GET['par2'] * $_GET['par2']); 
?>
<br>
<?php
	var_dump($_GET['par3'] + $_GET['par3']); 
?>
<br>
<?php
    if ($_GET['param'] === 1){
        echo 'hello';
    }   else{
        echo 'bye';
    }
	echo($_GET); 
?>
<br>
