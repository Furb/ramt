document.addEventListener("DOMContentLoaded", function () {
  const sliders = document.querySelectorAll(".slider");

  sliders.forEach((slider) => {
    const nextButton = slider.closest(".projekt").querySelector(".nextButton");
    const prevButton = slider.closest(".projekt").querySelector(".prevButton");

    let items = Array.from(slider.children);
    let isAnimating = false;

    function moveNext() {
      if (isAnimating) return;
      isAnimating = true;

      slider.style.transition = "transform 0.4s ease-in-out";
      slider.style.transform = "translateX(-25%)";

      setTimeout(() => {
        const firstItem = items.shift();
        slider.appendChild(firstItem);
        items.push(firstItem);

        resetPosition();
      }, 400);
    }

    function movePrev() {
      if (isAnimating) return;
      isAnimating = true;

      slider.style.transition = "transform 0.4s ease-in-out";
      slider.style.transform = "translateX(25%)";

      setTimeout(() => {
        const lastItem = items.pop();
        slider.prepend(lastItem);
        items.unshift(lastItem);

        resetPosition();
      }, 400);
    }

    function resetPosition() {
      slider.style.transition = "none";
      slider.style.transform = "translateX(0)";
      updateOpacity();
      isAnimating = false;
    }

    function updateOpacity() {
      items.forEach((item, index) => {
        item.style.opacity = "1";

        if (index === 1 || index === 2 || index === 3) {
          item.style.opacity = "0.2";
        }
      });
    }

    nextButton.addEventListener("click", moveNext);
    prevButton.addEventListener("click", movePrev);

    updateOpacity();
  });
});
