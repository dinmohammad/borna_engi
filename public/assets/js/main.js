
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
        991: {
            slidesPerView: 1,
        },
        1100: {
            slidesPerView: 2,
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
        1100: {
            slidesPerView: 3,
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



window.addEventListener('load', () => {
    const grid = document.querySelector('.grid');
    new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: 200,
        gutter: 10,
        fitWidth: true
    });
});


const currentPath = window.location.pathname;
$('.nav-link').each(function () {
    // Get href attribute and compare with current URL path
    const linkPath = $(this).attr('href');

    if (linkPath === currentPath) {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    }
});


// Header sticky
var header = $(".header-section");
var stickyClass = "is-sticky";

$(window).on("scroll", function () {
    if ($(this).scrollTop() > 100) {
        header.addClass(stickyClass);
    } else {
        header.removeClass(stickyClass);
    }
});



$(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
        $("#scroll-top").fadeIn();
    } else {
        $("#scroll-top").fadeOut();
    }
});
// Scroll to top on click
$("#scroll-top").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 800);
});



window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    preloader.style.transition = "opacity 0.5s ease";
    preloader.style.opacity = 0;
    setTimeout(() => {
        preloader.style.display = "none";
    }, 500);
});

// setInterval(() => {
//     const gif = document.getElementById("animated-gif");
//     const originalSrc = "assets/images/loader.gif";
//     gif.src = originalSrc + "?t=" + new Date().getTime(); // force reload
// }, 500);