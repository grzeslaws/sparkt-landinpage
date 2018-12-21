const showHidePostIcon = () => {
    window.addEventListener("scroll", () => {
        const postEl = document.querySelector(".c-footer__post");
        if (window.scrollY > 300) {
            postEl.classList.add("c-footer__post--show");
        } else {
            if (postEl.classList.contains("c-footer__post--show")) {
                postEl.classList.remove("c-footer__post--show");
            }
        }
    });
};

const setMenuHeight = () => {
    window.addEventListener("scroll", () => {
        const menuEl = document.querySelector(".c-navigation");
        if (menuEl) {
            const menuHeight = menuEl.getBoundingClientRect().height;

            if (window.scrollY > menuHeight) {
                menuEl.classList.add("c-navigation--lower");
            } else {
                if (menuEl.classList.contains("c-navigation--lower")) {
                    menuEl.classList.remove("c-navigation--lower");
                }
            }
        }
    });
};

const setWidthOfProjectPhoto = () => {
    if (!document.querySelector("[data-wrapper-text]") || !document.querySelector("[data-project]") || !document.querySelectorAll("[data-img]")) {
        return;
    }
    const setWidthOnImg = () => {
        const wrapperTextRight = document.querySelector("[data-wrapper-text]").getBoundingClientRect().right;
        const widthProjectEl = document.querySelector("[data-project]").getBoundingClientRect().width;
        const imgEl = document.querySelectorAll("[data-img]");
        Array.from(imgEl).map(i => (i.style.width = `${widthProjectEl - wrapperTextRight}px`));
    };

    window.addEventListener("resize", () => {
        setWidthOnImg();
    });

    setWidthOnImg();
};

const roleSlider = () => {
    const wrapperSliderRolesEl = document.querySelector("[wrapper-slider-roles]");
    const wrapperRolesEl = document.querySelector("[wrapper-roles]");
    const roleEl = wrapperSliderRolesEl.querySelector("span");
    const roleHeight = roleEl.getBoundingClientRect().height;
    let counter = 1;
    let resetTranslate;
    const roleArr = Array.from(wrapperSliderRolesEl.querySelectorAll("span"));

    wrapperSliderRolesEl.style.height = `${roleHeight}px`;
    setInterval(() => {
        if (counter < roleArr.length - 1) {
            clearInterval(resetTranslate);
            wrapperRolesEl.style.transform = `translateY(${-roleHeight * counter}px)`;
            wrapperRolesEl.style.transitionDuration = "600ms";
            counter++;
        } else {
            wrapperRolesEl.style.transform = `translateY(${-roleHeight * counter}px)`;
            resetTranslate = setInterval(() => {
                wrapperRolesEl.style.transform = "translateY(0)";
                wrapperRolesEl.style.transitionDuration = "0s";
            }, 1000);
            counter = 1;
        }

        // const firstChild = wrapperRolesEl.firstElementChild;
        // const firstChildClone = firstChild.cloneNode(true);
        // wrapperRolesEl.appendChild(firstChildClone);
        // wrapperRolesEl.firstElementChild.remove();

        // const resetTranslate = setInterval(() => {
        //     wrapperRolesEl.style.transform = "translateY(0)";
        // }, 1000);

    }, 3000);
};

const carousel = () => {
    const wrapper = document.querySelector(".c-carousel");
    let counter = 0;
    let wrapperWidth = wrapper.getBoundingClientRect().width;
    window.addEventListener("resize", () => {
        wrapperWidth = wrapper.getBoundingClientRect().width;
        showCurrent();
    });
    const images = wrapper.querySelectorAll(".c-carousel__img");
    const imagesLength = images.length;

    const showCurrent = () => {
        Array.from(images).map(img => {
            img.style.width = `${wrapperWidth}px`;
            img.style.transform = `translateX(${-counter * wrapperWidth}px)`;
        });
    };
    showCurrent();

    wrapper.querySelector(".next").addEventListener("click", () => {
        if (counter > imagesLength - 2) {
            return;
        }
        counter += 1;
        showCurrent();
    });

    wrapper.querySelector(".prev").addEventListener("click", () => {
        if (counter < 1) {
            return;
        }
        counter -= 1;
        showCurrent();
    });
};

roleSlider();
showHidePostIcon();
setMenuHeight();
setWidthOfProjectPhoto();
