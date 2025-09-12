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
  const waitForComments = (callback, timeout = 5000) => {
    const start = Date.now();

    const check = () => {
      if (
        window.allComments &&
        Array.isArray(window.allComments) &&
        window.allComments.length > 0
      ) {
        callback();
      } else if (Date.now() - start < timeout) {
        setTimeout(check, 50);
      }
    };

    check();
  };

  waitForComments(() => {
    const allComments = window.allComments;
    const commentsPerPage = window.commentsPerPage || 5;

    const list = document.getElementById("comment-list");
    const pagination = document.getElementById("pagination-list");

    if (!list || !pagination) return;

    const commentMap = {};
    allComments.forEach((comment) => {
      const parentId = String(comment.parent_id || "0");
      if (!commentMap[parentId]) commentMap[parentId] = [];
      commentMap[parentId].push(comment);
    });

    let currentPage = 1;

    function renderComments(page = 1) {
      list.innerHTML = "";

      const parents = commentMap["0"] || [];
      const start = (page - 1) * commentsPerPage;
      const end = start + commentsPerPage;
      const pageParents = parents.slice(start, end);

      pageParents.forEach((parent) => {
        renderThread(parent);
      });

      renderPagination(page);
    }

    function renderThread(parentComment) {
      const parentLi = createCommentElement(parentComment);
      list.appendChild(parentLi);

      const replies = commentMap[String(parentComment.id)] || [];
      replies.forEach((reply) => {
        const replyLi = createCommentElement(reply, true);
        list.appendChild(replyLi);
      });
    }

    function createCommentElement(comment, isReply = false) {
      const li = document.createElement("li");
      li.className = isReply ? "comment-reply" : "comment-root";

      li.innerHTML = `
        <div class="comment-header">
          <span class="comment-author">${getAuthor(comment)}</span>
          ${
            comment.author_role
              ? `<span class="comment-role">${escapeHtml(
                  comment.author_role
                )}</span>`
              : ""
          }
          <span class="comment-date">${escapeHtml(
            comment.formatted_date
          )}</span>
        </div>
        <div class="comment-body">
          <div class="comment-content">${escapeHtml(comment.content)}</div>
        </div>
      `;

      return li;
    }

    function renderPagination(currentPage) {
      const totalPages = Math.ceil(
        (commentMap["0"] || []).length / commentsPerPage
      );
      pagination.innerHTML = "";

      if (totalPages <= 1) return;

      for (let i = 1; i <= totalPages; i++) {
        const li = document.createElement("li");
        const btn = document.createElement("button");
        btn.textContent = i;
        btn.dataset.page = i;
        btn.className = i === currentPage ? "active" : "";
        btn.addEventListener("click", () => {
          currentPage = i;
          renderComments(currentPage);
        });
        li.appendChild(btn);
        pagination.appendChild(li);
      }
    }

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
});
