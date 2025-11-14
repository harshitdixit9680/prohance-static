document.querySelectorAll(".accordion-title").forEach((title) => {
  title.addEventListener("click", () => {
    const parent = title.parentElement;
    document.querySelectorAll(".accordion-item").forEach((item) => {
      if (item !== parent) item.classList.remove("active");
    });
    parent.classList.toggle("active");
  });
});
