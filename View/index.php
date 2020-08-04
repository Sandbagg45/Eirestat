<?php
  include "include_header.php";
include "../Model/session.php";
?>
<!doctype html>
<html lang="en">
    <body>
        <div class="container">
          <div class="signup">
            <p>Sign up for free!</p>
            </div>
            <div class="login-box">
                <div class="row">
                    <div class=  "col-md-6 login-left"><!--Login----->
                        <h1>Login Here</h1>
                        <form action="../Controller/validation.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="login_user" placeholder="Username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="login_password" placeholder="Password" class="form-control" required>
                            </div>
                            <button type="submit" name="loginbtn" class="btn btn-primary">Log-in</button>
                        </form>
                    </div>

                    <div class=  "col-md-6 login-right"><!--Register----->
                        <h1>Register Here</h1>
                        <form action="../Controller/registration.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="reg_user" placeholder="Username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="reg_password" placeholder="Password" class="form-control" required>
                            </div>
                            <button type="submit" name="registerbtn" class="btn btn-primary">Register</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </body>

</html>
