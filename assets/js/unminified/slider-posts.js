document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("slider-posts");
  const cards = Array.from(container.children);
  let index = 0;

  function getChunkSize() {
    const width = window.innerWidth;
    return width <= 1200 ? cards.length : 3;
  }

  function render() {
    const chunkSize = getChunkSize();
    cards.forEach((card, i) => {
      card.style.display =
        i >= index && i < index + chunkSize ? "block" : "none";
    });
  }

  document
    .querySelector(".slider-post_pag-right")
    .addEventListener("click", () => {
      const chunkSize = getChunkSize();
      index = (index + chunkSize) % cards.length;
      render();
    });

  document
    .querySelector(".slider-post_pag-left")
    .addEventListener("click", () => {
      const chunkSize = getChunkSize();
      index = (index - chunkSize + cards.length) % cards.length;
      render();
    });

  render();
});
