$(document).ready(function() {

    // select first location from list
    var latitude = $(".list-group-item:first-child").data('latitude');
    var longitude = $(".list-group-item:first-child").data('longitude');
    $(".list-group-item:first-child").addClass('active');

    var map = L.map('map-container').setView([latitude, longitude], 13);

     L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Click event on locations
    $('.list-group-item').click(function() {
        var latitude = $(this).data('latitude');
        var longitude = $(this).data('longitude');

        map.panTo(L.latLng(latitude, longitude));
        $(".list-group-item").removeClass('active');
        $(this).addClass('active');
    });

    // Add markers for each locations
    var locations = $(".list-group-item");

    locations.each(function(index, location) {
        var latitude = $(location).data('latitude');
        var longitude = $(location).data('longitude');
        var name = $(location).data('name');
        var rating = $(location).data('rating');

        L.marker([latitude, longitude]).bindPopup(name + "<br />Rating:" + rating).addTo(map);
    });
});
