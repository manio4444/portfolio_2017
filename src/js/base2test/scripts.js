var d = document;

// ################ DELETE_BEFORE_LOAD #########
function delete_before_load() {
    $('.beforeLoad').removeClass('beforeLoad');
}


// ################ MMENU_INIT ###########
function menuMobileObject() { return {

  m_menu_hamb: d.querySelector('button.hamburger'),
  m_menu_cont: d.querySelector('#navigation nav.nav_mobile'),
  m_menu_list: $('#navigation nav.nav_mobile'),
  // self: this,

  toggle: function (m_menu_hamb, m_menu_cont) {
    // console.log(self.m_menu_hamb);
    m_menu_hamb.classList.toggle('is-active');
    m_menu_cont.classList.toggle('show');
  },
  init: function() {
    console.log(this.m_menu_hamb);
    if (this.m_menu_hamb && this.m_menu_cont) {
      objectThis = this;
      this.m_menu_hamb.addEventListener('click', function(){objectThis.toggle(objectThis.m_menu_hamb, objectThis.m_menu_cont)}, false);
    }
    if (this.m_menu_list) {
      objectThis = this;
      this.m_menu_list.each(function(){
        $(this).click( function(){objectThis.toggle(objectThis.m_menu_hamb, objectThis.m_menu_cont);} );
      });
    }
  },

};}


// ################ GOOGLE MAPS #########
function initMap() {

var styles=[{featureType:"administrative",elementType:"geometry",stylers:[{color:"#a7a7a7"}]},{featureType:"administrative",elementType:"labels.text.fill",stylers:[{visibility:"on"},{color:"#737373"}]},{featureType:"landscape",elementType:"geometry.fill",stylers:[{visibility:"on"},{color:"#f1f1f1"}]},{featureType:"poi",elementType:"geometry.fill",stylers:[{visibility:"on"},{color:"#dadada"}]},{featureType:"poi",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"poi",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels.text.fill",stylers:[{color:"#696969"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#d2d2d2"},{visibility:"on"}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{visibility:"on"},{color:"#cdcdcd"}]},{featureType:"road.arterial",elementType:"geometry.fill",stylers:[{color:"#ffffff"}]},{featureType:"road.arterial",elementType:"geometry.stroke",stylers:[{color:"#d6d6d6"}]},{featureType:"road.local",elementType:"geometry.fill",stylers:[{visibility:"on"},{color:"#ffffff"},{weight:1.8}]},{featureType:"road.local",elementType:"geometry.stroke",stylers:[{color:"#d7d7d7"},{visibility:"on"}]},{featureType:"transit",elementType:"all",stylers:[{color:"#808080"},{visibility:"off"}]},{featureType:"water",elementType:"geometry.fill",stylers:[{color:"#c4c4c4"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"}]}];
  var coordinates = new google.maps.LatLng(lang['contact_latitude'], lang['contact_longitude']);
  var marker1_pos = new google.maps.LatLng(lang['contact_latitude_marker1'], lang['contact_longitude_marker1']);
  var marker2_pos = new google.maps.LatLng(lang['contact_latitude_marker2'], lang['contact_longitude_marker2']);
  if (document.body.offsetWidth>=1024) var zoomVar = 5;
  else var zoomVar = 3;
  var optionsMap = {
    center: coordinates,
    zoom: zoomVar,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: styles,
    // disableDefaultUI: true,
    // zoomControl: false,
    // scaleControl: false,
    scrollwheel: false,
    // disableDoubleClickZoom: true,
    // draggable: false,
  };

  var pinImage = new google.maps.MarkerImage(
    'templates/default/img/marker.png',
    new google.maps.Size(60, 54),
    new google.maps.Point(0,0),
    new google.maps.Point(30, 27)
  );

  var map = new google.maps.Map(document.getElementById("google_map"), optionsMap);
  var marker1 = new google.maps.Marker({
    position: marker1_pos,
    map: map,
    icon: pinImage
  });
  var marker2 = new google.maps.Marker({
    position: marker2_pos,
    map: map,
    icon: pinImage
  });
  google.maps.event.addListener(marker1, 'click', function () {
    window.open(lang['contact_gmaps_url1'], '_blank');
  });
  google.maps.event.addListener(marker2, 'click', function () {
    window.open(lang['contact_gmaps_url2'], '_blank');
  });
} //end function


// ################ MENU_DESKTOP_SCROLL ###########
function menu_desktop_scroll(nav) {

  var pos = window.pageYOffset || 0;
  if (pos > 200) nav.classList.add('scrolled');
  else nav.classList.remove('scrolled');

}

function menu_desktop_scroll_listener() {
  var nav = d.querySelector('#navigation');
  if (nav) {
    window.addEventListener('scroll', function() { menu_desktop_scroll(nav); } );
    menu_desktop_scroll(nav);
  }
}

// ################ REALIZATION_SLIDER ###########
function realization_slider() {
  $('#section_realization .r_slider').slick({
    centerMode: true,
    variableWidth:true,
    arrows: false,
    infinite: false,
    asNavFor: $('#section_realization .r_slider_sub'),
    focusOnSelect: true,
  });
  $('#section_realization .r_slider_sub').slick({
    // centerMode: true,
    prevArrow: '<span class="slick-prev">Previous</span>',
    nextArrow: '<span class="slick-next">Next</span>',
    infinite: false,
    asNavFor: $('#section_realization .r_slider'),
  });
}


// ################ WOOD_LIST_SLIDER ###########
function wood_list_slider() {
  $('#section_materials .m_wood_list').slick({
    centerMode: true,
    variableWidth:true,
    // arrows: false,
    mobileFirst: true,
    infinite: true,
    // centerMode: true,
    prevArrow: '<span class="slick-prev">Previous</span>',
    nextArrow: '<span class="slick-next">Next</span>',
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick" //from 768px slider is turning off
      }
    ]
  });
}
