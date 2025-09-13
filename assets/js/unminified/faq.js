// аккардеон faq
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

// комменты
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
        isDisabled = false,
        extraClass = ""
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

        if (extraClass) {
          btn.classList.add(extraClass);
        }

        li.appendChild(btn);
        return li;
      };

      // ← Предыдущая
      if (currentPage > 1) {
        pagination.appendChild(
          createPageButton(left, currentPage - 1, false, false, "arrow")
        );
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
          const span = document.createElement("span");
          span.textContent = "…";
          span.className = "pagination-ellipsis";
          li.appendChild(span);
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
        pagination.appendChild(
          createPageButton(right, currentPage + 1, false, false, "arrow")
        );
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

// форма

document.addEventListener("DOMContentLoaded", () => {
  const forms = document.querySelectorAll("form");

  forms.forEach((form) => {
    const phoneInput = form.querySelector('input[name="phone"]');
    if (phoneInput) {
      phoneInput.addEventListener("input", () => {
        phoneInput.value = phoneInput.value
          .replace(/[^\d+]/g, "")
          .replace(/^(\+)?(\d{0,15})/, "$1$2");
      });

      phoneInput.addEventListener("blur", () => {
        const errorSpan = form.querySelector(
          '.error-message[data-for="phone"]'
        );
        if (!errorSpan) return;
        errorSpan.textContent = "";
        const value = phoneInput.value.trim();

        if (value === "") {
          errorSpan.textContent = "Это обязательное поле";
        } else if (!/^\+?\d{7,15}$/.test(value)) {
          errorSpan.textContent = "Введены некорректные данные";
        }
      });
    }

    form.addEventListener("submit", (e) => {
      e.preventDefault();

      let hasError = false;
      let firstErrorField = null;

      form
        .querySelectorAll(".error-message")
        .forEach((span) => (span.textContent = ""));

      const fields = [
        { name: "author", label: "Это обязательное поле" },
        { name: "phone", label: "Это обязательное поле" },
        { name: "comment", label: "Это обязательное поле" },
      ];

      fields.forEach(({ name, label }) => {
        const input = form.elements[name];
        const errorSpan = form.querySelector(
          `.error-message[data-for="${name}"]`
        );

        if (!input || input.value.trim() === "") {
          if (errorSpan) errorSpan.textContent = label;
          if (!firstErrorField) firstErrorField = input;
          hasError = true;
        } else if (name === "phone" && !/^\+?\d{7,15}$/.test(input.value)) {
          if (errorSpan) errorSpan.textContent = "Введены некорректные данные";
          if (!firstErrorField) firstErrorField = input;
          hasError = true;
        }
      });

      const consent = form.elements["consent"];
      if (consent && !consent.checked) {
        consent.classList.add("invalid-checkbox");
        hasError = true;
      } else if (consent) {
        consent.classList.remove("invalid-checkbox");
      }

      if (hasError && firstErrorField) {
        firstErrorField.focus();
      }

      if (!hasError) {
        form.submit(); // сначала отправка
        showPopup("Спасибо! Ваш вопрос отправлен."); // потом попап
        form.reset();
      }
    });
  });

  //  Popup-функция
  function showPopup(message = "Спасибо! Ваш вопрос отправлен.") {
    const overlay = document.createElement("div");
    overlay.className = "popup-overlay";

    const popup = document.createElement("div");
    popup.className = "popup";

    const text = document.createElement("p");
    text.className = "popup-message";
    text.textContent = message;

    const closeBtn = document.createElement("button");
    closeBtn.className = "popup-close";
    closeBtn.textContent = "Закрыть";

    popup.appendChild(text);
    popup.appendChild(closeBtn);
    overlay.appendChild(popup);
    document.body.appendChild(overlay);
    document.body.classList.add("popup-open");

    closeBtn.addEventListener("click", () => {
      overlay.remove();
      document.body.classList.remove("popup-open");
    });
  }
});
