<?php
session_start();

if (isset($_SESSION['gebruiker_id']) && isset ($_SESSION['user_name'])){

?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="CSS/user_style.css">
</head>
<body>
        <h1>Hello <?php echo $_SESSION['name']?>,<br>
        what would you like to do next</h1>
        <a href="logout.php">Logout</a>
</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit();
}
?>