const owl = document.querySelector('.owl-carousel');
const eyeOpener = document.querySelector('.eye-opener');
const applicantCard = [...document.querySelectorAll('.jobs')];
const jobTag = [...document.querySelectorAll('.jobs .tags')];
const deleteBtn = document.querySelector('.jobs .delete-btn');
const editBtn = document.querySelector('.jobs .edit-btn');


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

if(eyeOpener)
    eyeOpener.addEventListener('click', (e) => {
       let passwordField = document.querySelector('input[validate="password"]');
        if(passwordField.getAttribute('type') === 'password'){
            passwordField.setAttribute('type', 'text');
            eyeOpener.innerHTML = '<i class="far fa-eye-slash"></i>';
        } else{
            passwordField.setAttribute('type', 'password');
            eyeOpener.innerHTML = '<i class="far fa-eye"></i>';
        }
    });

if(applicantCard)
    applicantCard.forEach(job => {
        job.addEventListener('click', (e) => {
            e.preventDefault();
            let jobId = e.currentTarget.getAttribute('id'),
                target = e.target,
                 ROUTE = `http://localhost:8000/jobs/giver/${jobId}/applicants`;

            if(target.tagName === 'BUTTON'){
                return;
            }

            location.href = ROUTE;
        });
    });
