class Step {
    selectedForm;
    stepCount;
    steps;
    nextBtn;
    prevBtn;
    currentStep;
    inputs;
    errorBag;
    host = "http://localhost:8000";
    submitBtn;
    constructor(form, btnClasses, action, multipleStep = false) {
        this.selectedForm = document.querySelector(`${form}`);
        this.steps = [...this.selectedForm.querySelectorAll(".step")];
        this.stepCount = this.steps.length;
        this.currentStep = 0;
        this.errorBag = {};
        this.action = action;
        this.inputs = [...this.selectedForm.querySelectorAll(".step input")];
        this.multipleStep = multipleStep;
        this.init();

        this.nextBtn = document.createElement("button");
        this.nextBtn.innerHTML = '<i class="far fa-arrow-right-long"></i>';
        this.nextBtn.classList.add("border-0");

        this.submitBtn = document.querySelector(".submit-btn");

        this.submitBtn.addEventListener("click", (e) => {
            e.preventDefault();
            this.handleSubmit(this.selectedForm);
        });

        this.showBtnClasses(btnClasses, this.nextBtn);
        this.nextBtn && this.selectedForm.appendChild(this.nextBtn);

        this.nextBtn.addEventListener("click", (e) => {
            e.preventDefault();

            if (this.moveNextStep()) {
                this.init();
                this.animateMove(
                    [
                        { transform: "translateX(100%)" },
                        { transform: "translateX(0%)" },
                    ],
                    { duration: 500, iterations: 1 }
                );
            }

            if (this.localCurrentStep > 0) {
                this.prevBtn = document.createElement("button");
                this.prevBtn.innerHTML =
                    '<i class="far fa-arrow-left-long"></i>';
                this.prevBtn.classList.add("btn-left", "border-0");
                this.prevBtn && this.selectedForm.appendChild(this.prevBtn);
                this.showBtnClasses(btnClasses, this.prevBtn);

                if (!this.prevBtn.hasAttribute("disabled")) {
                    this.prevBtn &&
                        this.prevBtn.addEventListener("click", (e) => {
                            e.preventDefault();
                            this.inputs[this.currentStep] &&
                                this.inputs[this.currentStep].classList.remove(
                                    "error"
                                );

                            if (parseInt(this.localCurrentStep) === 1)
                                this.prevBtn.setAttribute("disabled", "true");
                            else {
                                this.prevBtn.hasAttribute("disabled") &&
                                    this.prevBtn.removeAttribute("disabled");
                                this.nextBtn.hasAttribute("disabled") &&
                                    this.nextBtn.removeAttribute("disabled");
                            }

                            if (this.movePrevStep()) {
                                this.init();
                                this.animateMove(
                                    [
                                        { transform: "translateX(100%)" },
                                        { transform: "translateX(0%)" },
                                    ],
                                    { duration: 500, iterations: 1 }
                                );
                            }
                        });
                }
            }
        });
    }

    get localCurrentStep() {
        return localStorage.getItem("current-step");
    }

    moveNextStep() {
        let activeStep = localStorage.getItem("current-step");
        // activeStepElement = document.querySelector(`${this.steps[activeStep]}`);

        if (this.multipleStep) {
            if (
                this.validateGroup(
                    document.querySelectorAll(`div.step.active .form-group`)
                )
            ) {
                this.currentStep += 1;
                return true;
            } else return false;
        } else if (this.validateSingle(this.steps[activeStep])) {
            console.log(this.validateSingle(this.steps[activeStep]));
            this.currentStep += 1;
            return true;
        } else return false;
    }

    movePrevStep() {
        this.currentStep -= 1;
        return true;
    }

    get nextStep() {
        if (this.currentStep > this.stepCount)
            this.currentStep = this.stepCount;

        return this.currentStep + 1;
    }

    get prevStep() {
        return this.currentStep - 1;
    }

    storeSteps() {
        localStorage.setItem("current-step", `${this.currentStep}`);
        localStorage.setItem("next-step", `${this.nextStep}`);
        localStorage.setItem("prev-step", `${this.prevStep}`);
    }

    init() {
        let activeStep = this.steps.filter(
            (step, idx) => idx === this.currentStep
        );
        let inActiveStep = this.steps.filter(
            (step, idx) => idx !== this.currentStep
        );

        activeStep[0].classList.add("active");

        this.animateMove(
            [
                { transform: "translateX(100%)" },
                { transform: "translateX(0%)" },
            ],
            { duration: 500, iterations: 1 }
        );

        inActiveStep.forEach((step) => step.classList.remove("active"));
        this.storeSteps();
    }

    animateMove(config, timings) {
        const activeStep = document.querySelector(".step.active");

        activeStep.animate(config, timings).finished.then(() => {
            Object.keys(config[1]).forEach((style) => {
                activeStep.setAttribute(
                    "style",
                    `${this.hyphenate(style)} : ${config[1][style]}`
                );
            });
        });
    }

    hyphenate(str) {
        return str.replace(/[A-Z]/g, (match) => "-" + match.toLowerCase());
    }

    validateSingle(activeStep) {
        let input = activeStep.querySelector("input"),
            msg = activeStep.querySelector("p.error-msg"),
            label = input.getAttribute("placeholder"),
            formError;

        this.validationOptions.forEach((options) => {
            if (
                !options.isValid(input) &&
                input.getAttribute("validate").toLowerCase() ===
                    options.attribute
            ) {
                msg.innerHTML = options.msg(label);
                this.errorBag["registerForm"] = {};

                this.errorBag.registerForm = { valid: false };
                formError = false;
            } else {
                if (options.isValid(input)) {
                    msg.innerHTML = "";
                    this.errorBag.registerForm = { valid: true };
                    formError = true;
                }
            }
        });
        return formError;
    }

    validateGroup(activeGroupStep) {
        let funcValue = false;
        activeGroupStep.forEach((formGroup) => {
            let input = formGroup.querySelector("input"),
                msg = formGroup.querySelector("p.error-msg"),
                label,
                formError;

            if (input) {
                label = input.getAttribute("name");

                label = label.charAt(0).toUpperCase() + label.slice(1);

                console.log(label);
                this.validationOptions.forEach((options) => {
                    if (
                        !options.isValid(input) &&
                        input.getAttribute("validate").toLowerCase() ===
                            options.attribute
                    ) {
                        msg.innerHTML = options.msg(label);
                        this.errorBag["registerForm"] = {};

                        this.errorBag.registerForm = { valid: false };
                        formError = false;
                    } else {
                        if (options.isValid(input)) {
                            msg.innerHTML = "";
                            this.errorBag.registerForm = { valid: true };
                            formError = true;
                            console.log(this.errorBag);
                        }
                    }
                });
                funcValue = formError;
            } else {
                const selectInput = document.getElementById("user-select");
                if (selectInput.value === "") {
                    funcValue = false;
                    msg.innerHTML = "Please choose an option";
                } else funcValue = true;
            }
        });
        return funcValue;
    }

    validationOptions = [
        {
            attribute: "name",
            isValid: (input) => input.value.trim() !== "",
            msg: (label) => `${label} is not valid`,
        },
        {
            attribute: "no-validate",
            isValid: (input) => true,
            msg: (label) => `${label} is not valid`,
        },
        {
            attribute: "email",
            isValid: (input) => {
                let regEx =
                    /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                return !!input.value.match(regEx);
            },
            msg: (label) => `${label} is not a valid email-address`,
        },
        {
            attribute: "password",
            isValid: (input) => {
                let regExp =
                    /^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,16}$/;
                return !!input.value.match(regExp);
            },
            msg: (label) => `${label} length must be 8-16, lowercase and digit`,
        },
        {
            attribute: "phone",
            isValid: (input) => {
                let regExp = /^\d{7,15}$/;
                return !!input.value.match(regExp);
            },
            msg: (label) => `${label} is not valid`,
        },
        {
            attribute: "card_number",
            isValid: (input) => {
                let regExp = /^\d{16}$/;
                return !!input.value.match(regExp);
            },
            msg: (label) => `${label} is not valid`,
        },
        {
            attribute: "cvc",
            isValid: (input) => {
                let regExp = /^\d{3}$/;
                return !!input.value.match(regExp);
            },
            msg: (label) => `${label} is not valid`,
        },
        {
            attribute: "date",
            isValid: (input) => {
                let regExp = /^\d{4}-\d{2}-\d{2}$/;
                return !!input.value.match(regExp);
            },
            msg: (label) => `${label} is not valid`,
        },
    ];

    showBtnClasses(btnClasses, btn) {
        btnClasses &&
            btnClasses.forEach((className) => {
                btn && btn.classList.add(className);
            });
    }
    handleSubmit(form) {
        let formData = new FormData(form),
            token = document.querySelector("meta[token]").getAttribute("token");

        formData.append("_token", token);
        fetch(`${this.host}/${this.action}`, {
            method: "POST",
            body: formData,
        })
            .then((res) => res.json())
            .then((data) => {
                msgShow({
                    message: data.message,
                    type: data.type,
                    redirect: data.redirect ?? null,
                    mode: "light",
                });
            });
    }
}
