jQuery(document).ready(function ($) {
  const container = document.getElementById("slider-posts");
  if (!container) return;

  const cards = Array.from(container.children);
  if (cards.length === 0) return;

  const rightBtn = document.querySelector(".rab-right");
  const leftBtn = document.querySelector(".rab-left");
  if (!rightBtn || !leftBtn) return;

  let index = 0;

  function getChunkSize() {
    return window.innerWidth <= 1200 ? cards.length : 3;
  }

  // function render() {
  //   const chunkSize = getChunkSize();
  //   const maxIndex = cards.length - chunkSize;
  //   index = Math.min(index, maxIndex); // защита от выхода за пределы

  //   cards.forEach((card, i) => {
  //     const isVisible = i >= index && i < index + chunkSize;
  //     card.classList.toggle("slider-card", isVisible);
  //     card.classList.toggle("is-hidden", !isVisible);

  //     const tw = card.querySelector(".twentytwenty-container");
  //     if (
  //       isVisible &&
  //       tw &&
  //       !tw.classList.contains("twentytwenty-initialized")
  //     ) {
  //       $(tw).twentytwenty({
  //         default_offset_pct: 0.5,
  //         orientation: "horizontal",
  //       });
  //       tw.classList.add("twentytwenty-initialized");
  //     }
  //   });
  // }
  function render() {
    const chunkSize = getChunkSize();
    const maxIndex = cards.length - chunkSize;
    index = Math.min(index, maxIndex); // защита от выхода за пределы

    cards.forEach((card, i) => {
      const isVisible = i >= index && i < index + chunkSize;

      // card.classList.toggle("slider-card", isVisible);
      card.classList.toggle("is-hidden", !isVisible);
      card.classList.toggle("visible", isVisible); // 👈 добавляем класс при показе

      const tw = card.querySelector(".twentytwenty-container");
      if (
        isVisible &&
        tw &&
        !tw.classList.contains("twentytwenty-initialized")
      ) {
        $(tw).twentytwenty({
          default_offset_pct: 0.5,
          orientation: "horizontal",
        });
        tw.classList.add("twentytwenty-initialized");
      }
    });
  }

  rightBtn.addEventListener("click", () => {
    const chunkSize = getChunkSize();
    const maxIndex = cards.length - chunkSize;
    index = Math.min(index + chunkSize, maxIndex);
    render();
  });

  leftBtn.addEventListener("click", () => {
    const chunkSize = getChunkSize();
    index = Math.max(index - chunkSize, 0);
    render();
  });

  render();
});
