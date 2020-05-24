
<?php require '../controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!--external stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <title>Register</title>
    </head>
    <body>
  
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset md-4 form-div">
                    <form action="signup.php" method="POST">
                        <h3 class="text-center">Register</h3>
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php foreach ($errors as $error): ?>
                                <p><?php echo $error; ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="=username">Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label for="=email">Email</label>
                            <input type="text" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label for="=password">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg required">
                        </div>
                        <div class="form-group">
                            <label for="=passwordconf">Confirm Password</label>
                            <input type="password" name="passwordconf" class="form-control form-control-lg required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                        </div>
                        <p class="text-center">Already a member? <a href="login.php">Sign In</a></p>




                    </form>


                </div>   


            </div>



        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
