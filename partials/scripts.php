<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>
<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools-->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f9995bf25883e71"></script>

<script type="text/javascript">

    $('#contact-send-footer').on('submit', function(){
        event.preventDefault();
        $.post('send.php', {name: $('#name').val(), email: $('#email').val(), message: $('#message').val() }, function(data){
            $('#info-message-footer').html(data);
        });
    });

    $('#contact-send').on('submit', function(){
        event.preventDefault();
        $.post('send.php', {name: $('#name').val(), email: $('#email').val(), message: $('#message').val() }, function(data){
            $('#info-message').html(data);
        });
    });

</script>