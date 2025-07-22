
var swiper = new Swiper("#banner_swiper", {
    spaceBetween: 10,
    autoplay: {
        delay: 5000, // 5 seconds
        disableOnInteraction: false, // keeps autoplay even after user interaction
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

var swiper = new Swiper(".why_choose_slider", {
    spaceBetween: 10,
    slidesPerView: 1,
    autoplay: {
        delay: 5000, // 5 seconds
        disableOnInteraction: false, // keeps autoplay even after user interaction
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: false,
});


var swiper = new Swiper(".gallary_slider", {
    spaceBetween: 10,
    slidesPerView: 1,
    autoplay: {
        delay: 5000, // 5 seconds
        disableOnInteraction: false, // keeps autoplay even after user interaction
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".client_testimonials_slider", {
    spaceBetween: 10,
    slidesPerView: 1,
    autoplay: {
        delay: 5000, // 5 seconds
        disableOnInteraction: false, // keeps autoplay even after user interaction
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: false,
});

var swiper = new Swiper(".video_slider", {
    spaceBetween: 20,
    loop: true,
    slidesPerView: 3,
    speed: 1000, // ⏱️ 1200ms = 1s transition between slides

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: false,

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 3,
        }
    }
});



var swiper = new Swiper(".product_slider", {
    spaceBetween: 20,
    loop: true,
    slidesPerView: 4,
    // autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false,
    // },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: false,

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 4,
        }
    }
});



$('.select2').select2({
    placeholder: "Property type",
    allowClear: true,
    width: 'resolve'
});


$('.counter').each(function () {
    var $this = $(this);
    var target = +$this.attr('data-target');
    var count = 0;

    $({ countNum: $this.text() }).animate({ countNum: target }, {
        duration: 2000,
        easing: 'swing',
        step: function () {
        $this.text(Math.floor(this.countNum));
        },
        complete: function () {
        $this.text(this.countNum + (target > 100 ? "+" : ""));
        }
    });
});

$('.single-item-box-two').on('mouseenter', function () {
    $('.single-item-box-two').removeClass('active'); // remove from all
    $(this).addClass('active'); // add to hovered
});


$('.youtube-thumbnail').on('click', function () {
    const videoId = $(this).data('id');
    const autoplayUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    $('#youtubeIframe').attr('src', autoplayUrl);
});

$('#youtubeModal').on('hidden.bs.modal', function () {
    $('#youtubeIframe').attr('src', '');
});
