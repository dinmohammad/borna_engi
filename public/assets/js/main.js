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


$('.select2').select2({
    placeholder: "Property type",
    allowClear: true,
    width: 'resolve'
});