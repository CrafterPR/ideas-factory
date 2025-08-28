import Swiper from "swiper";
import {Autoplay, FreeMode, Pagination} from "swiper/modules";

new Swiper(".swiper-client-logos", {
    direction: "horizontal",
    loop: true,
    modules: [Autoplay, FreeMode],
    spaceBetween: 10,
    slidesPerView:"auto",
    centeredSlides: !1,
    centeredSlidesBounds: true,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    freeMode: {
        enabled: true,
        momentumBounce: false,
    },
    speed: 5000,

    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});

new Swiper(".swiper-case-studies",
    {modules:[Pagination,Autoplay],
        direction:"horizontal",
        loop:!0,
        autoplay:{
            delay:5e3
        },
        pagination:{
            el:".swiper-pagination",
            clickable:!0
        }
    });



