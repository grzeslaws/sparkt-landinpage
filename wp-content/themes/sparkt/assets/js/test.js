(() => {
    const wrapper = document.querySelector(".c-carousel");
    let counter = 0;
    let wrapperWidth = wrapper.getBoundingClientRect().width;
    window.addEventListener("resize", () => {
        wrapperWidth = wrapper.getBoundingClientRect().width;
        showCurrent()
    })
    const images = wrapper.querySelectorAll(".c-carousel__img");
    const imagesLength = images.length;

    const showCurrent = () => {
        Array.from(images).map((img) => {
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
})();
