<div class="slide" id="slide11" data-slide="11" data-stellar-background-ratio="0.5" style="background-position: 0px 0px;">

<div class="wrapper">
    
    <h1 class="title">Petróleo</h1>

</div>

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#pt-slide12'),
    opts = {
        offset: '100%'
    };
 
    $('#pt-slide12').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-pt12.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="pt-slide12"></div>

</div><!--End Slide 11 -->

