// ################ DELETE_BEFORE_LOAD #########
function delete_before_load() {
    $('.beforeLoad').removeClass('beforeLoad');
}


// ################ MMENU_INIT ###########
function menuMobileObject() {
  //private
  var m_menu_hamb = document.querySelector('button.hamburger');
  var m_menu_cont = document.querySelector('.main_navigation_list');
  var m_menu_list = $('#navigation nav.nav_mobile');

  return {
    //public
    toggle: function () {
      // console.log(self.m_menu_hamb);
      m_menu_hamb.classList.toggle('is-active');
      m_menu_cont.classList.toggle('show');
    },
    init: function() {
      if (m_menu_hamb && m_menu_cont) {
        m_menu_hamb.addEventListener('click', this.toggle, false);
      }
      if (this.m_menu_list) {
        objectThis = this;
        this.m_menu_list.each(function(){
          $(this).click( this.toggle );
        });
      }
    },
  }
}


// ################ GOOGLE MAPS #########
function initMap() {

  var styles = [{featureType:"all",elementType:"labels",stylers:[{visibility:"simplified"}]},{featureType:"all",elementType:"labels.text",stylers:[{color:"#969696"}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:17},{weight:1.2}]},{featureType:"administrative.country",elementType:"all",stylers:[{visibility:"simplified"}]},{featureType:"administrative.country",elementType:"geometry",stylers:[{visibility:"simplified"}]},{featureType:"administrative.province",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"administrative.locality",elementType:"all",stylers:[{visibility:"simplified"},{saturation:"-100"},{lightness:"30"}]},{featureType:"administrative.neighborhood",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"administrative.land_parcel",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"landscape",elementType:"all",stylers:[{visibility:"simplified"},{gamma:"0.00"},{lightness:"74"}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"landscape.man_made",elementType:"all",stylers:[{lightness:"3"}]},{featureType:"poi",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#000000"},{lightness:21}]},{featureType:"road",elementType:"geometry",stylers:[{visibility:"simplified"},{color:"#ff0000"},{saturation:"-65"}]},{featureType:"road",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"geometry",stylers:[{visibility:"on"}]},{featureType:"transit",elementType:"labels",stylers:[{visibility:"simplified"}]},{featureType:"transit",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit.line",elementType:"geometry",stylers:[{visibility:"on"},{color:"#ff0000"},{saturation:"-75"}]},{featureType:"transit.station",elementType:"geometry",stylers:[{color:"#525252"}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#444444"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"}]}];
  console.log(document.body.offsetWidth);
  if (document.body.offsetWidth>=1024) {
    var zoomValue = 11;
    var coordinates = new google.maps.LatLng(52.18204,21.24253);

  }
  else { //mobile view
    var zoomValue = 11;
    var coordinates = new google.maps.LatLng(52.22204,21.02253);

  }
  // var coordinates = new google.maps.LatLng(52.18204,21.24253);
  // var marker_pos = new google.maps.LatLng(52.18204,21.45553);
  var optionsMap = {
    center: coordinates,
    zoom: zoomValue,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: styles,
    disableDefaultUI: true,
    // zoomControl: false,
    // scaleControl: false,
    scrollwheel: false,
    // disableDoubleClickZoom: true,
    // draggable: false,
  };

  var pathAreaCoords = [new google.maps.LatLng(52.27373,20.97248), new google.maps.LatLng(52.25235,20.96858), new google.maps.LatLng(52.23474,20.93309), new google.maps.LatLng(52.2135,20.89318), new google.maps.LatLng(52.19516,20.929), new google.maps.LatLng(52.17722,20.98834), new google.maps.LatLng(52.18234,21.0518), new google.maps.LatLng(52.19811,21.06182), new google.maps.LatLng(52.20409,21.0866), new google.maps.LatLng(52.24851,21.15985), new google.maps.LatLng(52.24462,21.26619), new google.maps.LatLng(52.18204,21.45553), new google.maps.LatLng(52.16019,21.59037), new google.maps.LatLng(52.19056,21.59131), new google.maps.LatLng(52.1928,21.463), new google.maps.LatLng(52.25897,21.27082), new google.maps.LatLng(52.26435,21.06938), new google.maps.LatLng(52.25733,21.03432), new google.maps.LatLng(52.26039,21.00097), ];
  var shapeArea = new google.maps.Polygon({
    paths: pathAreaCoords,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35
  });
  //below declarations of marker, color can be change by "pinColor" variable
  // var pinColor = "379A39";
  // var pinImage = new google.maps.MarkerImage(
  //   'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|' + pinColor,
  //   // 'templates/default/img/marker.png', //alternative custom marker
  //   new google.maps.Size(21, 34),
  //   new google.maps.Point(0,0),
  //   new google.maps.Point(10, 34)
  // );

  var map = new google.maps.Map(document.getElementById("google_map"), optionsMap);
  // var marker = new google.maps.Marker({
  //   position: marker_pos,
  //   map: map,
  //   icon: pinImage
  // });
  shapeArea.setMap(map);
  // google.maps.event.addListener(marker, 'click', function () {
  //   window.open(lang['contact_gmaps_url'], '_blank');
  // });
} //end function


// ################ MENU_DESKTOP_SCROLL ###########
function menuDesktopObject() {
  //private
  var _mainNavContainer = document.querySelector('#main_navigation');
  var _addedClass = 'scrolled';
  var _expand = function() {
    _mainNavContainer.classList.add(_addedClass);
    // console.log('expand function');
  };
  var _collapse = function() {
    _mainNavContainer.classList.remove(_addedClass);
    // console.log('collapse function');
  };
  var _listenScroll = function() {
    var pos = window.pageYOffset || 0;
    if (pos > 200) _expand();
    else _collapse();
  };
  var _bindEvents = function() {
    if (_mainNavContainer) {
      window.addEventListener('scroll', _listenScroll, false);
    }
  };
  var _init = function() {
    _bindEvents();
  };

  return {
    //public
    expand : _expand,
    collapse : _collapse,
    init : _init
  }
}
