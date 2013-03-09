window.onload = function() {

 var myLatlng = new google.maps.LatLng(53.746351,-0.331993);
  var mapOptions = {
    zoom: 16,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var markerIcon = 'img/map-icon.png';

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title:"Hull School of Art and Design",
      icon: markerIcon
  });
}