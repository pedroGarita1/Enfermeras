// const imagenes = document.querySelectorAll('.animation-figure');

// function triggerAnimation (entries){
//     entries.forEach(entry =>{
//         const image = entry.target.querySelector('.animation-content');
//         image.classList.toggle('unset', entry.isIntersecting)
//     });
// }
// const options = {
//     root: null,
//     rootMargin: "0px",
//     threshold: 0.5
// }

// const observer = new IntersectionObserver(triggerAnimation, options);

// imagenes.forEach(image => {
//     observer.observe(image);
// });

jQuery('.slider').slick({
    slidesToShow: 4,
    infinite: true,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 1000,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 800,
            settings: 'unslick',
        },
    ]
});

$(".bannerSlider").slick({
    dots: false
    , autoplay: true
    , infinite: true
    , dots: false
    , slidesToShow: 1
    , slideswToScroll: 1
    , arrows: false
});