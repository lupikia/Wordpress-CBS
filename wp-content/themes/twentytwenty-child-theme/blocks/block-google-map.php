<script async defer
        src="<?php block_field("map_link"); ?>">
</script>
<script type="text/javascript" >
/**START cbs js **/
    document.addEventListener("DOMContentLoaded", function(event) {

        function load_map(){
            var uluru = {lat: -26.0883648, lng: 28.0769937};
            var map = new google.maps.Map(document.getElementById('contact-us-map'), {
            zoom: 14,
            styles:   [
                {elementType: 'geometry', stylers: [{color: '#535559'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#000000'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#ff0000'}]},
                {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#AAAAAC'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#AAAAAC'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#535559'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#6b9a76'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#3F3F43'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#212a37'}]
                },
                {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9ca5b3'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#535559'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: 'red'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: 'red'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{color: '#2f3948'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#535559'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#515c6d'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#535559'}]
                }
                ],
            center: uluru
            });

            var marker = new google.maps.Marker({
            position: uluru,
            map: map
            });
        }

        setTimeout(function(){

            load_map();
        }, 1000);

    });
/**END cbs js **/
</script>
<div id="contact-us-map">
</div>
