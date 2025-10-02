jQuery(document).ready(function ($) {
  const container = document.getElementById("slider-posts");
  const cards = Array.from(container.children);
  let index = 0;

  function getChunkSize() {
    const width = window.innerWidth;
    return width <= 1200 ? cards.length : 3;
  }

  function waitForImages(container, callback) {
    const images = container.querySelectorAll("img");
    let loaded = 0;

    if (images.length === 0) {
      callback();
      return;
    }

    images.forEach((img) => {
      if (img.complete && img.naturalWidth !== 0) {
        loaded++;
      } else {
        img.addEventListener("load", () => {
          loaded++;
          if (loaded === images.length) callback();
        });
        img.addEventListener("error", () => {
          loaded++;
          if (loaded === images.length) callback();
        });
      }
    });

    if (loaded === images.length) callback();
  }

  function render() {
    const chunkSize = getChunkSize();
    cards.forEach((card, i) => {
      const isVisible = i >= index && i < index + chunkSize;

      // Заменяем display: none на класс
      card.classList.toggle("slider-card", isVisible);
      card.classList.toggle("is-hidden", !isVisible);
      card.style.animationDelay = isVisible ? `${(i - index) * 150}ms` : "0ms";

      const twContainer = card.querySelector(".twentytwenty-container");
      if (
        isVisible &&
        twContainer &&
        !twContainer.classList.contains("twentytwenty-initialized")
      ) {
        waitForImages(twContainer, () => {
          $(twContainer).twentytwenty({
            default_offset_pct: 0.5,
            orientation: "horizontal",
          });
          twContainer.classList.add("twentytwenty-initialized");
        });
      }
    });
  }

  document.querySelector(".rab-right").addEventListener("click", () => {
    const chunkSize = getChunkSize();
    index = (index + chunkSize) % cards.length;
    render();
  });

  document.querySelector(".rab-left").addEventListener("click", () => {
    const chunkSize = getChunkSize();
    index = (index - chunkSize + cards.length) % cards.length;
    render();
  });

  render();
});
