<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login  AdminisTrator</title>
        <!-- Bootstrap -->
        <link href="<?php echo public_url('admin') ?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo public_url('admin') ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo public_url('admin') ?>/css/custom.min.css" rel="stylesheet">
    </head>
    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="" method="POST">
                            <h1>Login</h1>
                            <div>
                                <input type="text" name="maGV" class="form-control" placeholder="Mời bạn nhập email"  />
                                <?php echo form_error('maGV') ?>
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Mời bạn nhập password"  />
                                 <?php echo form_error('password') ?>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default">Login</button>
                                
                            </div>
                            
                            <?php if(isset($_SESSION['error'])) : ?>
                                <div class="alert alert-danger">
                                  <strong>Chú ý !</strong> <?php echo $_SESSION['error'] ?>
                                </div>
                                <?php unset($_SESSION['error']) ?>
                            <?php endif ;?>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <p class="change_link">New to site?
                                    <a href="" class="to_register"> Tạo mới </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>