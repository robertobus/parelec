<!-- Bootstrap -->
<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<?php if (isset($_REQUEST['controller'])): ?>
    <?php if ($_REQUEST['controller'] == 'product'): ?>
        <?php if (isset($_REQUEST['action'])): ?>
            <?php if ($_REQUEST['action'] == 'product'): ?>
                <?php foreach ($dynamic_styles as $dynamic_style ): echo $dynamic_style; endforeach; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

<!-- Custom Theme Style -->
<link href="css/custom.min.css" rel="stylesheet">