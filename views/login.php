<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dieta Rapida </title>
    <!-- Bootstrap -->
    <link href="<?php echo BASE; ?>components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo BASE; ?>components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo BASE; ?>components/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo BASE; ?>components/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo BASE; ?>assets/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST">
              <h1>Dieta Rapida</h1>
              <div>
                <input type="text" class="form-control" name="UserLogin" placeholder="Login" required/>
              </div>
              <div>
                <input type="password" class="form-control" name="UserPass" placeholder="Senha" required/>
              </div>
              <div>
                <input class="btn btn-default submit" name="submit" type="submit"/>
              </div>
              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
