<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <form action="register-check.php" method="post">
        <h2>Register</h2>
        <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])){ ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label for="name">Name</label>
        <?php if (isset($_GET['name'])){ ?>
            <input type="text" 
                   id="name"
                   name="name" 
                   placeholder="Name"
                   value="<?php echo $_GET['name']; ?>"><br>
        <?php }else{?>
            <input type="text" 
                   id="name"
                   name="name" 
                   placeholder="Name"><br>
        <?php }?>

        <label for="username">User Name</label>
        <?php if (isset($_GET['username'])){ ?>
            <input type="text" 
                   id="username"
                   name="username" 
                   placeholder="User Name"
                   value="<?php echo $_GET['username']; ?>"><br>
        <?php }else{?>
            <input type="text" 
                   id="username"
                   name="username" 
                   placeholder="User Name"><br>
        <?php }?>

        <label for="password">Password</label>
        <input type="password" 
               id="password"
               name="password" 
               placeholder="Password"><br>

        <label for="re_password">Confirm Password</label>
        <input type="password" 
               id="re_password"
               name="re_password" 
               placeholder="Password"><br>

        <button type="submit">Register</button>
        <a href="LogScreen.php" class="ca">Already have an account</a>
    </form>
</body>
</html>
