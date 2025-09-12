document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-item");
  faqItems.forEach((item) => {
    item.addEventListener("click", () => {
      faqItems.forEach((otherItem) => {
        if (otherItem !== item) otherItem.classList.remove("is-open");
      });
      item.classList.toggle("is-open");
    });
  });

  let isLoading = false;

  document.addEventListener("click", function (e) {
    const link = e.target.closest(".comment-pagination a");
    if (!link || isLoading) return;

    e.preventDefault();

    let cpage = 1;
    const match = link.href.match(/comment-page-(\d+)/);
    if (match) cpage = match[1];

    const container = document.querySelector("#faq-comments-container");
    if (!container) return;

    const postId = container.dataset.postId;
    if (!postId) return;

    isLoading = true;
    container.classList.add("loading");

    fetch(GH_Ajax.url, {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: new URLSearchParams({
        action: "load_comments",
        post_id: postId,
        cpage: cpage,
      }),
    })
      .then((res) => res.json())
      .then((data) => {
        isLoading = false;
        container.classList.remove("loading");

        if (data.success) {
          container.innerHTML = data.data.html;
          window.scrollTo({ top: container.offsetTop, behavior: "smooth" });
        } else {
          container.innerHTML =
            "<p>Ошибка загрузки комментариев. Попробуйте позже.</p>";
        }
      })
      .catch(() => {
        isLoading = false;
        container.classList.remove("loading");
        container.innerHTML = "<p>Ошибка соединения. Проверьте интернет.</p>";
      });
  });
});
