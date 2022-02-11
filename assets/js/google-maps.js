function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: -16.0868, lng: -39.6195};

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Itagimirim, BA' // Title Location
    });
}