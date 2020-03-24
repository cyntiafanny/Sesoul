<?PHP
    setcookie("loggedin", "val", time() - (7200), "/");
    header("Location: index.php");
?>