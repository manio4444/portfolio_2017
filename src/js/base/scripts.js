var d = document;

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
  var coordinates = new google.maps.LatLng(lang['contact_latitude'], lang['contact_longitude']);
  var marker_pos = new google.maps.LatLng(lang['contact_latitude'], lang['contact_longitude']);
  var optionsMap = {
    center: coordinates,
    zoom: 16,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    // styles: styles,
    // disableDefaultUI: true,
    // zoomControl: false,
    // scaleControl: false,
    scrollwheel: false,
    // disableDoubleClickZoom: true,
    // draggable: false,
  };

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
  var mainNavContainer = document.querySelector('#main_navigation');
  var addedClass = 'scrolled';
  return {
    //public
    listenScroll: function() {
      var pos = window.pageYOffset || 0;
      if (pos > 200) {
        expand();
      }
      else {
        this.collapse();
      }
    },
    expand: function () {
      mainNavContainer.classList.add(addedClass);
    },
    collapse: function () {
      mainNavContainer.classList.remove(addedClass);
    },
    init: function() {
      if (mainNavContainer) {
        window.addEventListener('scroll', this.listenScroll, false);
      }
    },
  }
}
