document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("slider-posts");
  const posts = sliderData.posts;
  let index = 0;
  let isTransitioning = false;

  function getChunkSize(postsLength) {
    const width = window.innerWidth;
    if (width <= 1200) return postsLength;
    return 3;
  }

  function renderWithLock() {
    isTransitioning = true;
    render();

    // разблокируем через 500ms (или сколько длится анимация)
    setTimeout(() => {
      isTransitioning = false;
    }, 500);
  }

  function render() {
    container.innerHTML = "";
    const chunkSize = getChunkSize(posts.length);

    for (let i = 0; i < chunkSize; i++) {
      const post = posts[(index + i) % posts.length];
      const bgStyle = post.image
        ? `background-image: url('${post.image}');`
        : `background-color: rgba(242, 242, 242, 1);`;

      setTimeout(() => {
        const card = document.createElement("a");
        card.className = "post-card";
        card.href = post.link;
        card.innerHTML = `          
            <div class="post-card_img" style="${bgStyle}"></div>
            <div class="post-title">
              <div class="post-card_head">${getIconHTML(
                "card",
                "m"
              )} процедура</div>
              ${post.title}
            </div>
            <div class="post-desc">
              <div class="post-card_head">${getIconHTML(
                "card",
                "m"
              )} Описание</div>
              <div class="text-line-clamp-2">${post.description}</div>
            </div>          
          `;
        container.appendChild(card);
      }, i * 150);
    }
  }

  function getIconHTML(id, size = "l") {
    return `<svg class="svg-container icon-size-${size}" xmlns="http://www.w3.org/2000/svg">
            <use xlink:href="#icon-${id}"></use>
          </svg>`;
  }

  document
    .querySelector(".slider-post_pag-right")
    .addEventListener("click", () => {
      if (isTransitioning) return;

      const chunkSize = getChunkSize(posts.length);
      index = (index + chunkSize) % posts.length;
      renderWithLock();
    });

  document
    .querySelector(".slider-post_pag-left")
    .addEventListener("click", () => {
      if (isTransitioning) return;

      const chunkSize = getChunkSize(posts.length);
      index = (index - chunkSize + posts.length) % posts.length;
      renderWithLock();
    });

  render();
});
