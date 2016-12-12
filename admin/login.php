<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAR-ELEC SRL</title>

    <?php include('partials/login_header.php') ?>

</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">

                <?php if (isset($_REQUEST['msg'])): ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong><?php echo $_REQUEST['msg'] ?></strong>
                    </div>
                <?php endif; ?>

                <form method="post" action="check_access.php">
                    <input type="hidden" name="action" value="login">
                    <h1>Inicio de Sesión</h1>
                    <div>
                        <input type="text" class="form-control" name="username" placeholder="Usuario" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-default btn-block" value="Entrar"/>
                        <!--<a class="reset_pass" href="#">Lost your password?</a>-->
                    </div>

                    <div class="clearfix"></div>
                    <div class="separator">
                        <div class="clearfix"></div>
                        <br/>
                        <div>
                            <h1><i class="fa fa-bolt"></i> PAR-ELEC SRL</h1>
                            <p>©2016 All Rights Reserved. PAR-ELEC SRL. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</div>

<?php include ('partials/login_footer_scripts.php') ?>

</body>
</html>
