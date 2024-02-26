const stepContainer = document.querySelector('.step-container');
const steps = [...stepContainer.querySelectorAll('.step')];
const btn = document.querySelector('.next-btn');

const slideLeft = [
    {
        transform: 'translateX(0%)',
        opacity: 1
    },
    {
        transform: 'translateX(-100%)',
        opacity: 0
    }
];

const fadeIn = [
    {
        // transform: 'translateX(0%)',
        opacity: 0
    },
    {
        // transform: 'translateX(-100%)',
        opacity: 1
    }
];

const timings = {
    duration: 1000,
    iterations: 1
}
//
// const slideRight = [
//     {
//         transform: 'translateX(100%)',
//     },
//     {
//         transform: 'translateX(-100%)',
//     }
// ];

// if(btn){
    steps.forEach(step => {
        const activeStep = document.querySelector('.step.active');

        step.animate(slideLeft, timings).finished.then(() => {
            activeStep.style.transform = slideLeft[1].transform;
            activeStep.style.opacity = slideLeft[1].opacity;

            step.classList.toggle('active');
        })
        console.log(step)
    });
// }


