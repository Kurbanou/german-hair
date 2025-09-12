document.addEventListener("DOMContentLoaded", function () {
  const allComments = window.allComments || [];
  const commentsPerPage = window.commentsPerPage || 5;

  const list = document.getElementById("comment-list");
  const pagination = document.getElementById("pagination-list");

  if (!list || !pagination || allComments.length === 0) {
    console.warn("Комментариев нет или контейнеры не найдены");
    return;
  }

  function renderComments(page = 1) {
    list.innerHTML = "";
    const start = (page - 1) * commentsPerPage;
    const end = start + commentsPerPage;
    const pageComments = allComments.slice(start, end);

    pageComments.forEach((comment) => {
      const li = document.createElement("li");
      li.className =
        comment.comment_parent > 0 ? "comment-reply" : "comment-root";
      li.innerHTML = `
        <div class="comment-date">${formatDate(comment.comment_date)}</div>
        <div class="comment-body">
          <span class="comment-name">${getAuthor(comment)}:</span>
          <span class="comment-content">${escapeHtml(
            comment.comment_content
          )}</span>
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

    if (currentPage > 1) {
      pagination.innerHTML += `<li><div class="pagination-arrow" data-page="${
        currentPage - 1
      }">←</div></li>`;
    }

    pagination.innerHTML += `<li><div class="pagination-page${
      currentPage === 1 ? " active" : ""
    }" data-page="1">1</div></li>`;

    if (currentPage > 3) {
      pagination.innerHTML += `<li class="pagination-ellipsis">...</li>`;
    }

    for (
      let i = Math.max(2, currentPage - 1);
      i <= Math.min(totalPages - 1, currentPage + 1);
      i++
    ) {
      pagination.innerHTML += `<li><div class="pagination-page${
        currentPage === i ? " active" : ""
      }" data-page="${i}">${i}</div></li>`;
    }

    if (currentPage < totalPages - 2) {
      pagination.innerHTML += `<li class="pagination-ellipsis">...</li>`;
    }

    pagination.innerHTML += `<li><div class="pagination-page${
      currentPage === totalPages ? " active" : ""
    }" data-page="${totalPages}">${totalPages}</div></li>`;

    if (currentPage < totalPages) {
      pagination.innerHTML += `<li><div class="pagination-arrow" data-page="${
        currentPage + 1
      }">→</div></li>`;
    }
  }

  pagination.addEventListener("click", function (e) {
    const el = e.target;
    if (el.dataset.page) {
      renderComments(parseInt(el.dataset.page));
    }
  });

  function formatDate(dateStr) {
    const timestamp = new Date(dateStr).getTime();
    const now = Date.now();
    const diff = Math.floor((now - timestamp) / 1000);

    if (diff < 60) return "только что";
    if (diff < 3600) return Math.floor(diff / 60) + " мин назад";
    if (diff < 86400) return Math.floor(diff / 3600) + " ч назад";
    if (diff < 604800) return Math.floor(diff / 86400) + " дн назад";
    return new Date(dateStr).toLocaleDateString("ru-RU");
  }

  function getAuthor(comment) {
    if (comment.user_id && comment.author_role === "administrator") {
      return "Менеджер " + comment.author;
    }
    return comment.author || "Гость";
  }

  function escapeHtml(text) {
    const div = document.createElement("div");
    div.textContent = text;
    return div.innerHTML;
  }

  renderComments(1);
});
