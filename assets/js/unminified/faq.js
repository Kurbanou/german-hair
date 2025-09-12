document.addEventListener("DOMContentLoaded", function () {
  const faqItems = document.querySelectorAll(".faq-item");
  faqItems.forEach((item) => {
    item.addEventListener("click", () => {
      faqItems.forEach((otherItem) => {
        if (otherItem !== item) otherItem.classList.remove("is-open");
      });
      item.classList.toggle("is-open");
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const list = document.getElementById("comment-list");
  const pagination = document.getElementById("pagination-list");

  if (
    !list ||
    !pagination ||
    !Array.isArray(allComments) ||
    allComments.length === 0
  ) {
    console.warn("Комментариев нет или контейнеры не найдены");
    return;
  }

  const commentsPerPage = window.commentsPerPage || 5;
  let currentPage = 1;

  function renderComments(page = 1) {
    list.innerHTML = "";
    const start = (page - 1) * commentsPerPage;
    const end = start + commentsPerPage;
    const pageComments = allComments.slice(start, end);

    pageComments.forEach((comment) => {
      const li = document.createElement("li");
      li.className =
        parseInt(comment.parent_id) > 0 ? "comment-reply" : "comment-root";

      li.innerHTML = ` 
        <div class="comment-date">${escapeHtml(comment.formatted_date)}</div>
        <div class="comment-body">
          <div class="comment-name">${getAuthor(comment)}</div>
            ${
              comment.author_role
                ? `<span class="comment-role">${escapeHtml(
                    comment.author_role
                  )}</span>`
                : ""
            }
          <div class="comment-content">${escapeHtml(
            comment.content
          )}</div>         
        </div>
        
      `;

      list.appendChild(li);
    });

    renderPagination(page);
  }

  function renderPagination(currentPage) {
    const totalPages = Math.ceil(allComments.length / commentsPerPage);
    pagination.innerHTML = "";

    if (totalPages <= 1) return;

    const createPageItem = (label, page, isActive = false) => {
      const li = document.createElement("li");
      const div = document.createElement("div");
      div.className = isActive ? "pagination-page active" : "pagination-page";
      div.dataset.page = page;
      div.textContent = label;
      li.appendChild(div);
      return li;
    };

    if (currentPage > 1)
      pagination.appendChild(createPageItem("←", currentPage - 1));
    pagination.appendChild(createPageItem("1", 1, currentPage === 1));

    if (currentPage > 3) pagination.appendChild(createEllipsis());

    for (
      let i = Math.max(2, currentPage - 1);
      i <= Math.min(totalPages - 1, currentPage + 1);
      i++
    ) {
      pagination.appendChild(createPageItem(i, i, currentPage === i));
    }

    if (currentPage < totalPages - 2) pagination.appendChild(createEllipsis());
    pagination.appendChild(
      createPageItem(totalPages, totalPages, currentPage === totalPages)
    );

    if (currentPage < totalPages)
      pagination.appendChild(createPageItem("→", currentPage + 1));
  }

  function createEllipsis() {
    const li = document.createElement("li");
    li.className = "pagination-ellipsis";
    li.textContent = "...";
    return li;
  }

  pagination.addEventListener("click", (e) => {
    const target = e.target.closest("[data-page]");
    if (target) {
      const page = parseInt(target.dataset.page, 10);
      if (!isNaN(page)) {
        currentPage = page;
        renderComments(currentPage);
      }
    }
  });

  function getAuthor(comment) {
    if (comment.author_role === "administrator") {
      return "Менеджер " + escapeHtml(comment.author);
    }
    return escapeHtml(comment.author || "Гость");
  }

  function escapeHtml(text) {
    const div = document.createElement("div");
    div.textContent = text;
    return div.innerHTML;
  }

  renderComments(currentPage);
});
