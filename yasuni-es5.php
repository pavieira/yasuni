<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.2" style="background-position: 0px 0px;">

<div class="wrapper">
	
	<h1 class="title">Pueblos del Yasuní</h1>

</div>

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#es-slide6'),
    opts = {
        offset: '100%'
    };
 
    $('#es-slide6').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-es6.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="es-slide6"></div>

</div><!--End Slide 5-->