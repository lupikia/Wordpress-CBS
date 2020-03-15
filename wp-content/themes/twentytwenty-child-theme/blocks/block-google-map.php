<script async defer
        src="<?php block_field("map_link"); ?>">
</script>
<script type="text/javascript" >
/**START cbs js **/
    document.addEventListener("DOMContentLoaded", function(event) {

        function load_map(){
            var uluru = {lat: -25.856325, lng: 28.187012};
            var map = new google.maps.Map(document.getElementById('contact-us-map'), {
            zoom: 14,
            center: uluru
            });

            var marker = new google.maps.Marker({
            position: uluru,
            map: map
            });
        }

        setTimeout(function(){

            load_map();
        }, 5000);

    });
/**END cbs js **/
</script>
<div id="contact-us-map">
</div>
