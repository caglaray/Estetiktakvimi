$(function() {


  //select2
  $(".select2").select2({

    "language": {
      'noResults': function() {
        return "Sonuç bulunamadı";
      }
    },
    escapeMarkup: function(markup) {
      return markup;
    }
  });



  // -------- Hidden Lists -----------------------------------------
  //readmorejs
  $('.list_infos .commentos').readmore({
    speed: 75,
    collapsedHeight: 22,
    moreLink: '<a href="#">daha fazla</a>',
    lessLink: '<a href="#">kapat</a>'
  });

  //doctor_infos
  $('.dc_hiddens').readmore({
    speed: 75,
    collapsedHeight: 80,
    moreLink: '<a href="#">daha fazla</a>',
    lessLink: '<a href="#">kapat</a>'
  });


  //hiddenTimes
  $('.saatler .hidden_times-btn').click(function() {
    $('.saatler .hidden_times-btn').hide();
    $('.saatler .hidden').removeClass('hidden');
    return false;
  });


  //hiddenCats
  $('.cat_checks .hidden_times-btn').click(function() {
    $(this).closest('li').hide();
    $(this).closest('.cat_checks').find('.hidden').removeClass('hidden');
    return false;
  });

  //hiddenDoctorservices
  $('.dc_services .hidden_times-btn').click(function() {
    $(this).closest('.hidden_times-btn').hide();
    $(this).closest('.dc_services').find('.hidden').removeClass('hidden');
    return false;
  });






  //tooltip
  $('[data-toggle="tooltip"]').tooltip();



  // dtHeight & Sticky
  if ($(window).width() >= 768) {

    // dtHeight
    var dtHeight = $('.detail_wrapper').height();
    $('aside').css('height', dtHeight - 55);

    //stickyHeaad
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 200) {
        $("body").addClass("sticky");
      } else {
        $("body").removeClass("sticky");
      }
    });

  }


  //mapGenislet
  $('.genislet_btn').click(function() {
    if ($(this).html() == '<i class="fa fa-search-plus"></i> haritayı yakınlaştır') {
      $(this).html('<i class="fa fa-search-minus"></i> haritayı uzaklaştır');
      $('.detail_wrapper').addClass('wrapped');
    } else {
      $(this).html('<i class="fa fa-search-plus"></i> haritayı yakınlaştır');
      $('.detail_wrapper').removeClass('wrapped');
    }
  });



  //syncCarousel
  $('.carousel-sync').carousel('cycle');
  $('.carousel-sync').on('click', '.carousel-control[data-slide]', function(ev) {
    ev.preventDefault();
    $('.carousel-sync').carousel($(this).data('slide'));
  });
  $('.carousel-sync').on('mouseover', function(ev) {
    ev.preventDefault();
    $('.carousel-sync').carousel('pause');
  });
  $('.carousel-sync').on('mouseleave', function(ev) {
    ev.preventDefault();
    $('.carousel-sync').carousel('cycle');
  });



  // appointmentCarousel
  $("#appo_cal_carousel").owlCarousel({
    items: 7,
    navigation: true,
    pagination: false,
    itemsDesktop: [1199, 7],
    itemsDesktopSmall: [979, 1],
    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
  });


  // partnersCarousel
  $(".partners_car").owlCarousel({
    autoPlay: 3000,
    items: 7,
    navigation: true,
    pagination: false,
    itemsDesktop: [1199, 7],
    itemsDesktopSmall: [979, 2],
    itemsMobile: [479, 2],
    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
  });




});
