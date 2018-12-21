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

showHidePostIcon();
setMenuHeight();
setWidthOfProjectPhoto();
