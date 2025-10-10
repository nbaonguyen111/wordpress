document.addEventListener("DOMContentLoaded", () => {
    const el = document.querySelector(".wp-block-query-title");
    if (el) {
      el.innerHTML = el.innerHTML
        .replace("results for:", "") // xóa phần chữ
        .replace(/^Search/, "<span class='search-term'>Search:</span>")
        .trim();
    }
  });
  