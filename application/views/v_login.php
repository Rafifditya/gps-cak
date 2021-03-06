
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GPScak! - Sign in</title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <h1>Sign in</h1>

              <?php echo form_open('VerifyLogin'); ?>

              <?php echo validation_errors(); ?>
              <div>
                <input type="text" id="empid" name="empid" class="form-control" placeholder="username" required="" />
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input class="btn btn-default" type="submit" value="Login"/>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <p class="change_link">Not a member ?
                    <a href="#signin" class="to_register"> Register here</a>
                  </p>
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> GPS <i class="fa fa-map-marker"></i> <span style="color:orange"> CAK!</span> </h1>

                  ©2018 All Rights Reserved<br>
                </div>
              </div>
            <?php echo form_close(); ?>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
