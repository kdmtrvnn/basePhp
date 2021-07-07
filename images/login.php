<?php session_start();

    if (isset($_POST['username'])) 
    {
        $_SESSION['username'] = $_POST['username'];

        if (isset($_POST['remember'])) 
        {
            setcookie('remember','1');
        }

        header('location: a.php');
        exit;
    }
?>

<form method="post">
    <input type="text" name="username" />
    <input type="submit" name="submit" value="submit" />
</form>