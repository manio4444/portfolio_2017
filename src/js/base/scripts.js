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

  var styles = [{"stylers":[{"saturation":-100},{"gamma":0.8},{"lightness":4},{"visibility":"on"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"on"},{"color":"#5dff00"},{"gamma":4.97},{"lightness":-5},{"saturation":100}]}];
  var coordinates = new google.maps.LatLng(52.18204,21.45553);
  var marker_pos = new google.maps.LatLng(52.18204,21.45553);
  var optionsMap = {
    center: coordinates,
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    // styles: styles,
    // disableDefaultUI: true,
    // zoomControl: false,
    // scaleControl: false,
    scrollwheel: false,
    // disableDoubleClickZoom: true,
    // draggable: false,
  };

var triangleCoords = [new google.maps.LatLng(52.27373,20.97248), new google.maps.LatLng(52.25235,20.96858), new google.maps.LatLng(52.23474,20.93309), new google.maps.LatLng(52.2135,20.89318), new google.maps.LatLng(52.19516,20.929), new google.maps.LatLng(52.17722,20.98834), new google.maps.LatLng(52.18234,21.0518), new google.maps.LatLng(52.19811,21.06182), new google.maps.LatLng(52.20409,21.0866), new google.maps.LatLng(52.24851,21.15985), new google.maps.LatLng(52.24462,21.26619), new google.maps.LatLng(52.18204,21.45553), new google.maps.LatLng(52.16019,21.59037), new google.maps.LatLng(52.19056,21.59131), new google.maps.LatLng(52.1928,21.463), new google.maps.LatLng(52.25897,21.27082), new google.maps.LatLng(52.26435,21.06938), new google.maps.LatLng(52.25733,21.03432), new google.maps.LatLng(52.26039,21.00097), ];

  //below declarations of marker, color can be change by "pinColor" variable
  var pinColor = "379A39";
  var pinImage = new google.maps.MarkerImage(
    'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|' + pinColor,
    // 'templates/default/img/marker.png', //alternative custom marker
    new google.maps.Size(21, 34),
    new google.maps.Point(0,0),
    new google.maps.Point(10, 34)
  );

  var map = new google.maps.Map(document.getElementById("google_map"), optionsMap);
  var marker = new google.maps.Marker({
    position: marker_pos,
    map: map,
    icon: pinImage
  });
  google.maps.event.addListener(marker, 'click', function () {
    window.open(lang['contact_gmaps_url'], '_blank');
  });
} //end function


// ################ MENU_DESKTOP_SCROLL ###########
function menuDesktopObject() {
  //private
  var _mainNavContainer = document.querySelector('#main_navigation');
  var _addedClass = 'scrolled';
  var _expand = function() {
    _mainNavContainer.classList.add(_addedClass);
    console.log('expand function');
  };
  var _collapse = function() {
    _mainNavContainer.classList.remove(_addedClass);
    console.log('collapse function');
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
