function initMap() {
  var officelocations = [
      ['18 Hardgate', 55.9567043,-2.7771647, 4],
      ['22 Hardgate', 55.9564185,-2.7772601, 5],
      ['39 High Street', 56.0011402,-2.517073, 3],
      ['8 Westgate', 56.0582873,-2.7267233, 2],
      ['121 High Street', 55.9431982,-2.9520539, 1]
    ];
  var map = new google.maps.Map(document.getElementById('contactmap'), {
    zoom: 11,
     center: new google.maps.LatLng(55.9877321,-2.7596459),
    mapTypeId: 'terrain',
    styles: [
    {
        "featureType": "landscape",
        "stylers": [
            {
                "hue": "#FFBB00"
            },
            {
                "saturation": 43.400000000000006
            },
            {
                "lightness": 37.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "hue": "#FFC200"
            },
            {
                "saturation": -61.8
            },
            {
                "lightness": 45.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 51.19999999999999
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 52
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "hue": "#0078FF"
            },
            {
                "saturation": -13.200000000000003
            },
            {
                "lightness": 2.4000000000000057
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "hue": "#00FF6A"
            },
            {
                "saturation": -1.0989010989011234
            },
            {
                "lightness": 11.200000000000017
            },
            {
                "gamma": 1
            }
        ]
    }
],
    disableDefaultUI: true,
    zoomControl: true,
    scrollwheel: false
  });
  var infowindow = new google.maps.InfoWindow();

      var marker, i;

      for (i = 0; i < officelocations.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(officelocations[i][1], officelocations[i][2]),
          map: map
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(officelocations[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
}

jQuery(document).ready(function($) {
  $('.mobile-nav__open').bigSlide({
    menu: '#mmenu',
    easyClose: true
  });
  $(function() {
    if (!Modernizr.svg) {
      $('img[src$=".svg"]').each(function() {
        var $img = $(this);
        $img.attr('src', $img.attr('src').replace(/svg$/, 'png'));
      });
    }
  });
  $('a[href^="#"]').bind('click.smoothscroll', function(e) {
    e.preventDefault();
    var target = this.hash;
    $target = $(target);
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 1000, 'swing', function() {
      window.location.hash = target;
    });
  });
  $(".sform__toggle div").click(function(){
   $(this).addClass('active').parents('.sform__toggle').find('div').not($(this)).removeClass('active');
   var currentTabIndex = $(this).index();
   $('.sform__toggle--form:eq('+ currentTabIndex +')').addClass('sform__toggle--active').parents('.sform__wrap').find('.sform__toggle--form').not($('.sform__toggle--form:eq('+ currentTabIndex +')')).removeClass('sform__toggle--active');
  });
  $('.slick--slider').slick({
    dots: true,
    dotsClass: 'slider-dots',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 8000,
    fade: true,
    cssEase: 'linear',
    arrows: false,
    adaptiveHeight: true,
    customPaging: function(slider, i) {
      var thumb = $(slider.$slides[i]).data('thumb');
      return '<span class="dots"></span>';
    }
  });
  $('.slick--featured').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 10000,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    variableWidth: false,
    focusOnSelect: true,
    customPaging: function(slider, i) {
      var thumb = $(slider.$slides[i]).data('thumb');
      return '<span class="dots"></span>';
    }
  });
  $('.slick--testimonials').slick({
    dots: true,
    infinite: true,
    speed: 300,
    cssEase: 'linear',
    adaptiveHeight: false,
    arrows: false,
    customPaging: function(slider, i) {
      var thumb = $(slider.$slides[i]).data('thumb');
      return '<span class="dots"></span>';
    }
  });
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: false,
    variableWidth: false,
    focusOnSelect: true
  });
  $('.slick--team').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    draggable: false,
    fade: false,
    adaptiveHeight: true
  });
  $('.slick--team-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slick--team',
    dots: false,
    centerMode: false,
    variableWidth: false,
    focusOnSelect: true
  });
  $('.slick--office').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: true
  });
  $('.slick--office-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slick--office',
    dots: false,
    centerMode: false,
    variableWidth: false,
    focusOnSelect: true
  });
});
