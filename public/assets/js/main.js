const host = "https://deleviapp.000webhostapp.com";
const msgShow = ({ message, type, mode, duration, redirect }) => {
    const msg = new Msg(".msg-alerts");

    msg.init({
        type: type,
        msg: message,
        mode: mode ?? "light",
        duration,
    });

    setTimeout(() => {
        if (redirect) {
            if (redirect === "reload") {
                location.reload();
            } else location.href = redirect;
        }
    }, duration ?? 5000);
};

const owl = document.querySelector(".owl-carousel");
const eyeOpener = document.querySelector(".eye-opener");
const applicantCard = [...document.querySelectorAll(".jobs")];
const deleteBtn = document.querySelector("#delete-btn");

if (owl)
    $(document).ready(() => {
        $("#owl-one").owlCarousel({
            items: 3,
            autoplay: true,
            autoplayTimeout: 5000,
            loop: true,
            responsiveClass: true,
            responsiveBaseElement: "body",
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
                // 820: {
                //     items: 1
                // }
            },
        });
        $("#owl-two").owlCarousel({
            items: 1,
            loop: true,
            autoPlayTimeout: 5000,
            autoplay: true,
            autoplaySpeed: 1500,
        });
    });

if (eyeOpener)
    eyeOpener.addEventListener("click", (e) => {
        let passwordField = document.querySelector(
            'input[validate="password"]'
        );
        if (passwordField.getAttribute("type") === "password") {
            passwordField.setAttribute("type", "text");
            eyeOpener.innerHTML = '<i class="far fa-eye-slash"></i>';
        } else {
            passwordField.setAttribute("type", "password");
            eyeOpener.innerHTML = '<i class="far fa-eye"></i>';
        }
    });

if (applicantCard)
    applicantCard.forEach((job) => {
        job.addEventListener("click", (e) => {
            e.preventDefault();
            let jobId = e.currentTarget.getAttribute("id"),
                url = new URL(window.location.href),
                loggedInUser = e.currentTarget.getAttribute("user_id"),
                target = e.target,
                ROUTE = `${host}/jobs/giver/${jobId}/applicants`;

            if (url.pathname.includes("/jobs/seeker")) {
                ROUTE = `${host}/jobs/seeker/${jobId}/apply`;
            } else if (target.tagName === "BUTTON") {
                return;
            }
            if (target.tagName === "A") {
                ROUTE = `${host}/jobs/giver/${loggedInUser}/edit/${jobId}`;
                location.href = ROUTE;
            }

            location.href = ROUTE;
        });
    });

if (deleteBtn) {
    let closeModalBtn = document.querySelector(".btn-close"),
        showDelete = [...document.querySelectorAll(".open-delete")];

    showDelete.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            let loggedInUser = btn.getAttribute("user_id"),
                jobId = btn.getAttribute("job_id"),
                ROUTE = `${host}/jobs/giver/${loggedInUser}/delete/${jobId}`;

            deleteBtn.addEventListener("click", (e) => {
                fetch(ROUTE)
                    .then((res) => res.json())
                    .then((data) => {
                        $("#delete-modal").modal("hide");
                        msgShow({
                            message: data.message,
                            type: data.type,
                            redirect: data.redirect ?? null,
                            mode: "light",
                        });
                    });
            });
        });
    });
}
