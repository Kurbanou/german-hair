document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("slider-posts");
  if (!container) return;

  const cards = Array.from(container.children);
  if (cards.length === 0) return;

  const rightBtn = document.querySelector(".slider-post_pag-right");
  const leftBtn = document.querySelector(".slider-post_pag-left");
  if (!rightBtn || !leftBtn) return;

  let index = 0;

  function getChunkSize() {
    return window.innerWidth <= 1200 ? cards.length : 3;
  }

  function render() {
    const chunkSize = getChunkSize();
    cards.forEach((card, i) => {
      const isVisible = i >= index && i < index + chunkSize;
      card.style.display = isVisible ? "block" : "none";
      card.style.animationDelay = isVisible ? `${(i - index) * 150}ms` : "0ms";

      if (isVisible) {
        card.classList.add("slider-card");
      } else {
        card.classList.remove("slider-card");
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
