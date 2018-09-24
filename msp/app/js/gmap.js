function initialize() {
    var latlng = new google.maps.LatLng(35.620683,139.728804);
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById('campus-map'), myOptions);
    var mapStyle = [{"stylers": [{ "saturation": -100 }]}];
    var mapType = new google.maps.StyledMapType(mapStyle);
    map.mapTypes.set('GrayScaleMap', mapType);
    map.setMapTypeId('GrayScaleMap');
    var markerImg = {
        url: '/img/googleMapIcon.png'
    };
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(35.620683,139.728804),
        map: map,
        icon: markerImg
    });
}
