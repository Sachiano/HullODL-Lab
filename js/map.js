window.onload = function() {

 var myLatlng = new google.maps.LatLng(53.745851,-0.332193);
  var mapOptions = {
    zoom: 17,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    scrollwheel: false
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var markerIcon = 'img/map-icon.gif';

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title:"HullODL is at: the Hull School of Art and Design",
      icon: markerIcon
  });
}