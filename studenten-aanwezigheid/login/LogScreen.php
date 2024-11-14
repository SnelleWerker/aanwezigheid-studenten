<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <form action="login.php" method="post">
        
    <div class="logo-container">
        <img src="../CSS/fotos/natinlogo.png" alt="Natin Logo" style="width: 100%; max-width: 300px;"/> <!-- Adjust the path and size as needed -->
    </div>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <label>User Name</label>
        <input type="text" name="username" placeholder="User  Name" required><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required><br>

        <button type="submit">Log in</button>
        <a href="register.php" class="ca">Create an account</a>
    </form>
</body>
</html>