const owl = document.querySelector('.owl-carousel');
if(owl)
    $(document).ready(() => {
        $('.owl-carousel').owlCarousel({
            items: 3,
            autoplay: true,
            autoplayTimeout: 5000,
            loop: true,
            responsiveClass: true,
            responsiveBaseElement: 'body',
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
              // 820: {
              //     items: 1
              // }
            }
        });
    });
