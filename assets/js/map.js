/**
 * Created by root on 15.06.17.
 */
function initMap() {
    var latitude = 59.990147,
        longitude = 30.159004,
        map_zoom = 15;
    var style = [{
        featureType: 'all',
        stylers: [
            {saturation: 0}]
    }, {
        featureType: 'water',
        skylers: [
            {saturation: 1}]
    }];
    var map_options = {
        center: new google.maps.LatLng(latitude, longitude),
        zoom: map_zoom,
        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: true
    };
    var map = new google.maps.Map(document.getElementById('map'), map_options);
    var image = '/wp-content/themes/kids/assets/images/map_marker.png';
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(latitude, longitude),
        map: map,
        icon: image
    });

    map.getStreetView().setOptions({
        adressControlOptions: {
            position: google.maps.ControlPosition.BOTTOM
        }
    });
}


    /*
    var panorama = map.getStreetView();
    panorama.setPosition({
        lat: latitude,
        lng: longitude
    });
    panorama.setPov({
        heading: 265,
        pitch: 0
    });

    panorama.setVisible(true);
    map.setStreetView(panorama);


    function toggleStreetView() {
        var toggle = panorama.getVisible();
        if (toggle === false) {
            panorama.setVisible(true);
        } else {
            panorama.setVisible(false);
        }
    }
}
*/
