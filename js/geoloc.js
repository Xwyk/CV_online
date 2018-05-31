$(document).ready(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            $.post('php/localisation.php', {latitude: pos['lat'], 'longitude': pos['lng']});
        }, function() {
        });
    }
});