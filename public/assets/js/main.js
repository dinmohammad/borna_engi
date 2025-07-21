var swiper = new Swiper("#banner_swiper", {
    spaceBetween: 10,
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