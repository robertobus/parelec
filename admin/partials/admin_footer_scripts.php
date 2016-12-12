<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Skycons -->
<script src="vendors/skycons/skycons.js"></script>

<?php if (isset($_REQUEST['controller'])): ?>
    <?php if ($_REQUEST['controller'] == 'product'): ?>
        <?php if (isset($_REQUEST['action'])): ?>
            <?php if ($_REQUEST['action'] == 'list'): ?>
                <?php foreach ($dynamic_scripts as $dynamic_script ): echo $dynamic_script; endforeach; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

<!-- Custom Theme Scripts -->
<script src="js/custom.min.js"></script>

<!-- Skycons -->
<script>
    var icons = new Skycons({
            "color": "#73879C"
        }),
        list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
        ],
        i;

    for (i = list.length; i--;)
        icons.set(list[i], list[i]);

    icons.play();
</script>
<!-- /Skycons -->