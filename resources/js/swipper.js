import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import {Autoplay, FreeMode, Pagination} from "swiper/modules";


 new Swiper('.swiper-client-logos', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView:"auto",
    modules:[Autoplay,FreeMode],
    spaceBetween:10,
    centeredSlides:"true",
    centeredSlidesBounds:"true",
    autoplay:{
        delay:0,
        disableOnInteraction:true
    },
    freeMode:{
        enabled:true,
        momentumBounce:true
    },
    speed:5e3,
    loopedSlides:20,
    loopAdditionalSlides:10,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

new Swiper(".swiper-header",
    {modules:[Autoplay],
        direction:"horizontal",
        loop:!0,
        autoplay:{delay:1e4}
    });

new Swiper(".swiper-header",
    {modules:[Autoplay],
        direction:"horizontal",
        loop:!0,autoplay:{delay:1e4}
    })

new Swiper(".swiper-case-studies",
    {modules:[Pagination,Autoplay],
        direction:"horizontal",
        loop:true,
        autoplay:{delay:5e3},
        pagination:{el:".swiper-pagination",
            clickable:!0}
    })

