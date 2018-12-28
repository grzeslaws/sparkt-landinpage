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
    if (!document.querySelector("[wrapper-slider-roles]")) {
        return;
    }

    const wrapperSliderRolesEl = document.querySelector("[wrapper-slider-roles]");
    const wrapperRolesEl = document.querySelector("[wrapper-roles]");
    const roleEl = wrapperSliderRolesEl.querySelector("span");

    const firstChild = wrapperRolesEl.firstElementChild;
    const firstChildClone = firstChild.cloneNode(true);
    wrapperRolesEl.appendChild(firstChildClone);

    const roleHeight = roleEl.getBoundingClientRect().height;
    let counter = 1;
    const roleArr = Array.from(wrapperSliderRolesEl.querySelectorAll("span"));

    wrapperSliderRolesEl.style.height = `${roleHeight}px`;
    setInterval(() => {
        if (counter < roleArr.length - 1) {
            wrapperRolesEl.style.transform = `translateY(${-roleHeight * counter}px)`;
            wrapperRolesEl.style.transitionDuration = "600ms";
            counter++;
        } else {
            wrapperRolesEl.style.transform = `translateY(${-roleHeight * counter}px)`;
            setTimeout(() => {
                wrapperRolesEl.style.transform = "translateY(0)";
                wrapperRolesEl.style.transitionDuration = "0s";
            }, 1000);
            counter = 1;
        }
    }, 3000);
};

// const photosSlider = () => {
//     if (!document.querySelector("[wrapper-slider-photos]")) {
//         return;
//     }

//     const wrapperSliderPhotosEl = document.querySelector("[wrapper-slider-photos]");
//     const wrapperPhotosEl = document.querySelector("[wrapper-photos]");
//     const photoEl = wrapperSliderPhotosEl.querySelector("img");

//     const firstChild = wrapperPhotosEl.firstElementChild;
//     const firstChildClone = firstChild.cloneNode(true);
//     wrapperPhotosEl.appendChild(firstChildClone);

//     const photoWidth = photoEl.getBoundingClientRect().width;
//     let counter = 1;
//     let resetTranslate;
//     const photosArr = Array.from(wrapperSliderPhotosEl.querySelectorAll("img"));

//     wrapperSliderPhotosEl.style.height = `${photoWidth}px`;
//     setInterval(() => {
//         if (counter < photosArr.length - 1) {
//             clearInterval(resetTranslate);
//             wrapperPhotosEl.style.transform = `translateX(${-photoWidth * counter}px)`;
//             wrapperPhotosEl.style.transitionDuration = "600ms";
//             counter++;
//         } else {
//             wrapperPhotosEl.style.transform = `translateX(${-photoWidth * counter}px)`;
//             resetTranslate = setInterval(() => {
//                 wrapperPhotosEl.style.transform = "translateX(0)";
//                 wrapperPhotosEl.style.transitionDuration = "0s";
//             }, 1000);
//             counter = 1;
//         }
//     }, 3000);
// };

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

const showHideModal = () => {
    const overlayEl = document.querySelector("[data-modal]");
    const modalBoxEl = document.querySelector("[data-modal-box]");
    const closeEl = document.querySelector("[data-close-modal]");

    const hideModal = () => {
        if (overlayEl.classList.contains("o-modal--show")) {
            overlayEl.classList.remove("o-modal--show");
        }
        document.body.style.overflow = "unset";
    }

    document.querySelector("[data-schedule-demo]").addEventListener("click", () => {
        overlayEl.classList.add("o-modal--show");
        document.body.style.overflow = "hidden";

        modalBoxEl.addEventListener("click", e => e.stopPropagation());
    });

    overlayEl.addEventListener("click", hideModal);
    closeEl.addEventListener("click", hideModal);
};

const viewOnScroll = () => {

    class VisibleWhenScrolling {

        constructor(classThatHides, classThatShows, classThatShowsAnimation) {
            this.elementsToHides = document.querySelectorAll(`.${classThatHides}`);
            this.classThatShows = classThatShows;
            this.classThatShowsAnimation = classThatShowsAnimation;
        }
    
        initShowAndHideElements() {
    
            Array.from(this.elementsToHides).forEach((item) => {
    
                let elementToAppearTopValue = item.getBoundingClientRect().top;
                let elementToAppearHeight = item.getBoundingClientRect().height;
                
                if ((elementToAppearTopValue - window.innerHeight + elementToAppearHeight / 4) < 0) {
                    item.classList.add(this.classThatShows);
                    item.classList.add(this.classThatShowsAnimation);
                } 
                if ((elementToAppearTopValue - window.scrollY > window.innerHeight || (elementToAppearTopValue +  elementToAppearHeight) < 0) && item.classList.contains(this.classThatShows)) {
                    item.classList.remove(this.classThatShows);
                }
            });
        }
    
        initShowAndHideElementsOnScroll() {
    
            window.onscroll = () => {
                this.initShowAndHideElements();
            }
        }
    }
    
    const visibleWhenScrolling = new VisibleWhenScrolling("u-detect-to-hide", "u-visible-on-scroll", "u-visible-animation-on-scroll");
    visibleWhenScrolling.initShowAndHideElements();
    visibleWhenScrolling.initShowAndHideElementsOnScroll();
};

const navigationMobile = () => {
    const classToAdd = "mobile-menu";
    const hamEl = document.querySelector("[data-hamburger]");
    hamEl.addEventListener("click", () => {
        const bodyEl = document.querySelector("body");
        if (!bodyEl.classList.contains(classToAdd)) {
            bodyEl.classList.add(classToAdd);
            bodyEl.style.overflow = "hidden";
        } else {
            bodyEl.classList.remove(classToAdd);
            bodyEl.style.overflow = "unset";
        }
    })
}

showHideModal();
roleSlider();
showHidePostIcon();
setMenuHeight();
setWidthOfProjectPhoto();
viewOnScroll();
navigationMobile();
