function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: 2.2984551, lng: 102.2067168};
    
    var map = new google.maps.Map(document.getElementById('myMap'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'DDL Associates Sdn. Bhd.' // Title Location
    });
    
}