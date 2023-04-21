<form method="POST">
    <input name="test1">
    <input name="test2">
    <input type="submit">
</form>

<?php
    session_start();
	
    if (!empty($_POST)) {
        if (валидация формы) {	
	    $_SESSION['flash'] = 'форма успешно сохранена';
	    header('Location: form.php');
        } else {
	    $_SESSION['flash'] = 'форма не прошла валидацию';
        }
    }
    if (isset($_SESSION['flash'])) {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }
?>
