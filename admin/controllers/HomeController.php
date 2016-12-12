<?php

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

if ($action == 'message'):
    echo "<div class='row'>";
    echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
    echo "<h3>Mensaje</h3>";
    echo "</div></div>";
else:
    echo "<div class='row'>";
    echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
    echo "<h3>Escritorio</h3>";
    echo "</div></div>";
endif;