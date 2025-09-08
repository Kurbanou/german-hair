document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("slider-posts");
  const cards = Array.from(container.children);
  let index = 0;

  function getChunkSize() {
    const width = window.innerWidth;
    return width <= 1200 ? cards.length : 3;
  }
  sliderData.posts.forEach((post, i) => {
    console.log(`${i + 1}. ${post.title}`);
  });

  function render() {
    const chunkSize = getChunkSize();
    cards.forEach((card, i) => {
      if (i >= index && i < index + chunkSize) {
        card.style.display = "block";
        card.style.animationDelay = `${(i - index) * 150}ms`;
        card.classList.add("slider-card"); // если не добавлен
      } else {
        card.style.display = "none";
        card.style.animationDelay = "0ms";
        card.classList.remove("slider-card"); // сбросить анимацию
      }
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
