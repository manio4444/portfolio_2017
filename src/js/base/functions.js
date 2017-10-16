/*
* Pnotify settings
* REQUIRES ANIMATE.CSS
*/
  var stack_bottomright = {"dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25};
  function pnotify($tekst, $typ){
    var notice = new PNotify({
      text: $tekst,
      addclass: 'stack-bottomright',
      stack: stack_bottomright, //must be in external value
      type: $typ,
      hide: true, //set false if want to style notificatons
      icon: false,
      closer: true,
      history: { maxonscreen: 4, },
      animate: {
        animate: true,
        in_class: 'zoomInLeft',
        out_class: 'zoomOutRight'
      },
      buttons: { sticker: false }
    });
    notice.get().click(function() {
      notice.remove();
    });
  }
/* Replaces alert by pnofity */
function alert(tekst) { pnotify(tekst, 'info'); }




$(document).ready(function() {


  //stopuj animacje na scroll
  $('html, body').on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
    $('html, body').stop();
  });


  // ################ SAFARI_DETECT ###########
  if( /constructor/i.test(window.HTMLElement)){
      // console.log('safariDetect: true');
      $('body').addClass('safari');
  }


  // ################ TOUCHSCREEN_DETECT ###########
  /*
  * Add class to body for hover effects,  if touchscreen IS NOT detected
  * Function is from Modernizr touchevents.js
  * If there are bugs look for update on github:
  @ https://github.com/Modernizr/Modernizr/blob/master/feature-detects/touchevents.js
  */

  // Chrome (desktop) used to lie about its support on this, but that has since been rectified: http://crbug.com/36415
  function touchscreenDetect() {
    if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) return true;
    else return false;
  }
  console.log('touchscreenDetect: '+touchscreenDetect());
  if (!touchscreenDetect()) $('body').addClass('noTouchscreen');


  // ################ BACKTOTOP ###########
  $('#backtotop').click(function(){
      $('html, body').animate({scrollTop: 0},'slow');
  });
  $(window).scroll(function(){
      if($(window).scrollTop()>300) $("#backtotop").addClass('visible');
      else $("#backtotop").removeClass('visible');
  });


  // ################ COOKIE_INFORMATION ###########
  /*
   * Using jquery.cookie.js plugin
   * By default cookie container need to have hidden class
  */
  var cookieName = 'cookie_notice';
  var myCookie = $.cookie(cookieName);
  var cookieDiv = $('#cookieinfo');
  var footerDiv = $('footer#section_footer');
  var cookieOnClick = $('#cookieinfo .close');

  function setMarginBottomFooter() {
    if (document.body.clientWidth<1024) {
      footerDiv.css('margin-bottom', cookieDiv.outerHeight()+"px");
    } else footerDiv.css('margin-bottom', 0);
  }

  if (myCookie != 'yes') {
    cookieDiv.removeClass('hidden');
    footerDiv.addClass('cookable');
    window.addEventListener('resize', setMarginBottomFooter, false);
    setMarginBottomFooter();
  }

  cookieOnClick.click(function(){
  cookieDiv.slideUp();
  footerDiv.removeClass('cookable');
  $.cookie(cookieName, 'yes', { expires: 365 });
  window.removeEventListener('resize', setMarginBottomFooter, false);
  footerDiv.css('margin-bottom', 0);
  });


  // ################ SMOOTH_LINK_SCROLL #########
  $('a[href*="#"]').click(function(event) {
    var selected = '#'+$(this).attr('href').split('#')[1];
      if ($(selected).length) {
          event.preventDefault();
          panelheight = $(selected).height();
          winheight = $(window).height();
          offset = (winheight-panelheight)/2;
          if (offset<0) {offset=0;}
          distance = $(selected).offset().top;
          if (document.body.clientWidth>=1024) distance = distance - 60;
          $('html, body').animate({scrollTop: distance}, 750);
      }
  });


  // ################ CONTACT_FORM #########

  function fillSpamSecure() {
    $('[name="b7b564ab232539533b8a357a5f64dff7"]').val(Math.random().toString(36).substring(7)); //spam bots security, shold be filled
  }

  function formLock() {
    $('input, textarea', formElement).prop('readonly', true);
    $('button', formElement).prop('disabled', true);
    formElement.addClass('form_lock');
  }

  function formUnLock() {
    $('input, textarea', formElement).prop('readonly', false);
    $('button', formElement).prop('disabled', false);
    formElement.removeClass('form_lock');
  }

  var formElement = $('#contact_form');

  formElement.submit(function(event) {
    event.preventDefault();
    formElement.ajaxSubmit({
      dataType : 'json',
      beforeSubmit: formLock,
      success: function(data) {
        formUnLock();
        if(data['status']===true) {
          pnotify(data['wiadomosc'], 'info');
          formElement[0].reset();
          fillSpamSecure();
        } else {
          pnotify(data['wiadomosc'], 'info');
        }
      },
      error: function(xhr, status, error) {
        console.log('ERROR - Problem with ajax request');
        console.log('xhr:');
        console.log(xhr);
        console.log('status:');
        console.log(status);
        console.log('blad:');
        console.log(error);
        formUnLock();
      }
    });
  });

  fillSpamSecure(); //first run on filling

});
