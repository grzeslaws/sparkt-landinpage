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

const setMenuHEight = () => {
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

showHidePostIcon();
setMenuHEight();
