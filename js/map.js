window.onload = function() {

 var myLatlng = new google.maps.LatLng(53.744441,-0.330684);
  var mapOptions = {
    zoom: 17,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    scrollwheel: false
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var markerIcon = 'img/map-icon.gif';

  google.maps.visualRefresh = true; 
  
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title:"HullODL is at Platform Studios, on the 3rd floor of Wilberforce Court",
      icon: markerIcon
  });
}