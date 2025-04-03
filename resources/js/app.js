import { Splide } from '@splidejs/splide';
import '@splidejs/splide/css';

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Splide only if slider exists
    const sliderElement = document.querySelector('.promotions-slider');
    
    if (sliderElement) {
        new Splide('.promotions-slider', {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            autoplay: true,
            interval: 5000,
            pauseOnHover: true,
            pauseOnFocus: true,
            arrows: true,
            pagination: true,
            speed: 600,
            breakpoints: {
                1024: {
                    perPage: 1,
                },
                768: {
                    perPage: 1,
                },
            },
            classes: {
                arrows: 'splide__arrows custom-arrows',
                pagination: 'splide__pagination custom-pagination',
            },
        }).mount();
    }
});