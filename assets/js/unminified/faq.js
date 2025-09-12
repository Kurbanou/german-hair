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
        
          <span class="comment-date">${escapeHtml(
            comment.formatted_date
          )}</span>
        </div>
        <div class="comment-body">
          <span class="comment-name">${getAuthor(comment)}:</span>
          
          <span class="comment-content">${escapeHtml(comment.content)}</span>
        </div>
      `;

      return li;
    }

    function renderPagination(currentPage) {
      const left = `
<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49933 5.70679L7.12111 9.99952L5.70703 11.4136L0 5.70656L5.70703 0L7.12111 1.41408L2.49933 5.70679Z" fill="#215C81"/>
</svg>
`;

      const right = `
<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.50067 6.29321L0.87889 2.00048L2.29297 0.5864L8 6.29344L2.29297 12L0.87889 10.5859L5.50067 6.29321Z" fill="#215C81"/>
</svg>
`;
      const totalPages = Math.ceil(
        (commentMap["0"] || []).length / commentsPerPage
      );
      pagination.innerHTML = "";

      if (totalPages <= 1) return;

      const createPageButton = (
        label,
        page,
        isActive = false,
        isDisabled = false
      ) => {
        const li = document.createElement("li");
        const btn = document.createElement("button");
        btn.dataset.page = page;

        if (label.trim().startsWith("<svg")) {
          btn.innerHTML = label;
        } else {
          btn.textContent = label;
        }

        if (isActive) btn.classList.add("active");
        if (isDisabled) {
          btn.disabled = true;
          btn.classList.add("disabled");
        } else {
          btn.addEventListener("click", () => {
            currentPage = page;
            renderComments(currentPage);
          });
        }

        li.appendChild(btn);
        return li;
      };

      // ← Предыдущая
      if (currentPage > 1) {
        pagination.appendChild(createPageButton(left, currentPage - 1));
      }

      const pages = [];

      if (totalPages <= 5) {
        for (let i = 1; i <= totalPages; i++) {
          pages.push(i);
        }
      } else {
        pages.push(1); // всегда первая

        if (currentPage > 3) {
          pages.push("…");
        }

        const start = Math.max(2, currentPage - 1);
        const end = Math.min(totalPages - 1, currentPage + 1);

        for (let i = start; i <= end; i++) {
          pages.push(i);
        }

        if (currentPage < totalPages - 2) {
          pages.push("…");
        }

        pages.push(totalPages); // всегда последняя
      }

      // Отрисовка
      pages.forEach((item) => {
        if (item === "…") {
          const li = document.createElement("li");
          li.textContent = "…";
          pagination.appendChild(li);
        } else {
          const isActive = item === currentPage;
          const isDisabled = isActive;
          pagination.appendChild(
            createPageButton(String(item), item, isActive, isDisabled)
          );
        }
      });

      // → Следующая
      if (currentPage < totalPages) {
        pagination.appendChild(createPageButton(right, currentPage + 1));
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
