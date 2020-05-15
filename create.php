<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/create.css">
</head>
<body>
    <?php 
        include "staff/connection.php"
        ?>
    
    <section id="signup-box">
                <h1>Create Tele Account</h1>
                <p>Please enter all details to create account</p>
                <?php
                error_reporting(0);
                if ($_GET['out']==1){ ?>
                <div class="alert alert-success" role="alert">
                    <h3>Account Created Successfully<h3>
                </div> <?php } ?>
                
                <form method="POST" action="telemarketing/creat.php" id="signup-form">
                    <label for="name">Name</label><br>
                    <input type="text" name="name" placeholder="Full Name"><br>

                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder="email"><br>
                    <label for="nickname">Mobile Number</label><br>
                    <input type="text" name="mobile" placeholder="mobile number"><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="passcode" placeholder="******"><br>
                    <button type="submit">Create</button>
                </form>

                
                <p><small>In case any error occured contact with admin</small></p>
    </section>

    
</body>
</html>