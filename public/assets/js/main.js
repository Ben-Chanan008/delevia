const owl = document.querySelector('.owl-carousel');
if(owl)
    $(document).ready(() => {
        $('#owl-one').owlCarousel({
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
        $('#owl-two').owlCarousel({
            items: 1,
            loop: true,
            autoPlayTimeout: 5000,
            autoplay: true,
            autoplaySpeed: 1500

        });
    });
